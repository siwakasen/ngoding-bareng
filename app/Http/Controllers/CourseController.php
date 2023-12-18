<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use App\Models\Question;
use App\Models\ContentCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        $categories = Category::all();
        $user = Auth::user();
        return view('userPage.courses.coursePage', compact('courses', 'categories', 'user'));
    }

    public function filter($id)
    {
        $categories = Category::all();
        $user = Auth::user();
        $courses = Course::where('id_category', $id)->get();
        return view('userPage.courses.coursePage', compact('courses', 'categories', 'user'));
    }
    public function search(Request $request)
    {
        $input = $request->search;
        $categories = Category::all();
        $user = Auth::user();
        $courses = Course::where('title', 'like', '%' . $input . '%')
            ->orWhereHas('category', function ($query) use ($input) {
                $query->where('name', 'like', '%' . $input . '%');
            })
            ->orWhere('price', 'like', '%' . $input . '%')
            ->orWhere('description', 'like', '%' . $input . '%')
            ->get();
        return view('userPage.courses.coursePage', compact('courses', 'categories', 'user'));
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $content = ContentCourse::where('id_course', $id)->first();
        return redirect('contentCourse/' . $id . '/' . $content->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
