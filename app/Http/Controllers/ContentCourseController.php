<?php

namespace App\Http\Controllers;

use App\Models\ContentCourse;
use App\Models\Course;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Bracket;
use App\Models\Transaction;

class ContentCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    public function show($id_course, $id_content)
    {
        $user = Auth::user();
        $user_courses = Course::whereHas('transaction.bracket', function ($query) use ($user) {
            $query->where('id_user', $user->id)->where('status', 'paid');
        })->get();

        if (!$user_courses->contains('id', $id_course)) {
            abort(404); // Return the default Laravel 404 page
        }

        //take course data and all contents related with
        $course = $user_courses->where('id', $id_course)->first();
        $contents = ContentCourse::where('id_course', $course->id)->get();

        //take the specific content data and all questions related with
        $user_course_contents = ContentCourse::where('id_course', $course->id)->get();
        if (!$user_course_contents->contains('id', $id_content)) {
            abort(404);
        }
        $content = $user_course_contents->where('id', $id_content)->first();
        $questions = Question::where('id_content', $content->id)
            ->where('id_parent', null)
            ->with('replies')
            ->get();
        return view('userPage.courses.contentCourse', compact('user', 'course', 'contents', 'content', 'questions'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContentCourse $contentCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContentCourse $contentCourse)
    {
        //
    }
}
