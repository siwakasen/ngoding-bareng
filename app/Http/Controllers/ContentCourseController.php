<?php

namespace App\Http\Controllers;

use App\Models\ContentCourse;
use App\Models\Course;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class ContentCourseController extends Controller
{
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

    //admin

    public function create($id_course)
    {
        $course = Course::where('id', $id_course)->first();
        $content = ContentCourse::create([
            'id_course' => $course->id,
            'list_number' => 1,
        ]);

        return redirect()->route('editContent', ['id_course' => $course->id, 'id_content' => $content->id]);
    }

    public function showContentOnEdit($id_course, $id_content)
    {
        $course = Course::where('id', $id_course)->first();
        $content = ContentCourse::where('id', $id_content)->first();
        $contents = ContentCourse::where('id_course', $course->id)->get();
        return view('adminPage.courses.createContent', compact('course', 'content', 'contents'));
    }

    public function store(Request $request, $id_content)
    {

        $course = Course::where('id', $request->id_course)->first();

        $content = ContentCourse::where('id', $id_content)->first();
        try {
            //save inputan
            $content->name = $request->name;
            $content->description = $request->description;
            //thumbnail
            if ($request->thumbnail != null) {
                if ($content->thumbnail != null) {
                    unlink($content->thumbnail);
                }
                $thumbnail = $request->file('thumbnail');
                $filename = 'content' . time() . '.' . $thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('/storage/thumbnail');
                $thumbnail->move($destinationPath, $filename);
                $content->thumbnail = '/storage/thumbnail/' . $filename;
            }

            //link video
            if ($request->link != null) {
                if ($content->link != null) {
                    unlink(public_path($content->link));
                }
                $link = $request->file('link');
                $filename = time() . '.' . $link->getClientOriginalExtension();
                $destinationPath = public_path('/storage/video');
                $link->move($destinationPath, $filename);
                $content->link = '/storage/video/' . $filename;
            }

            $content->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        //cek jika ada content terakhir yg masih null
        $lastnullContent = ContentCourse::where('id_course', $course->id)->where('name', null)->first();

        if ($lastnullContent) {
            return redirect()->route('editContent', ['id_course' => $course->id, 'id_content' => $lastnullContent->id]);
        }
        return redirect()->route('editContent', ['id_course' => $course->id, 'id_content' => $content->id])->with('success', 'Content successfully saved!');
    }

    public function createNew($id_course)
    {
        $lastnullContent = ContentCourse::where('id_course', $id_course)->where('name', null)->first();

        if ($lastnullContent) {
            return redirect()->route('editContent', ['id_course' => $id_course, 'id_content' => $lastnullContent->id]);
        }
        $course = Course::where('id', $id_course)->first();
        $sum = ContentCourse::where('id_course', $course->id)->count();
        $content = ContentCourse::create([
            'id_course' => $course->id,
            'list_number' => $sum++,
        ]);

        return redirect()->route('editContent', ['id_course' => $course->id, 'id_content' => $content->id]);
    }

    public function saveAllContent(Request $request)
    {
        $course = Course::where('id', $request->id_course)->first();
        try {
            $contents = ContentCourse::where('id_course', $course->id)->where('name', null)->get();
            if ($contents->count() > 0) {
                return redirect()->route('editContent', ['id_course' => $course->id, 'id_content' => $contents[0]->id])->with('error', 'Please delete or fill the unfinish contents!');
            } else {
                //save inputan
                $content = ContentCourse::where('id', $request->id_content)->first();
                $content->name = $request->name;
                $content->description = $request->description;
                //thumbnail
                if ($request->thumbnail != null) {
                    if ($content->thumbnail != null) {
                        unlink($content->thumbnail);
                    }
                    $thumbnail = $request->file('thumbnail');
                    $filename = 'content' . time() . '.' . $thumbnail->getClientOriginalExtension();
                    $destinationPath = public_path('/storage/thumbnail');
                    $thumbnail->move($destinationPath, $filename);
                    $content->thumbnail = '/storage/thumbnail/' . $filename;
                }

                //link video
                if ($request->link != null) {
                    if ($content->link != null) {
                        unlink(public_path($content->link));
                    }
                    $link = $request->file('link');
                    $filename = time() . '.' . $link->getClientOriginalExtension();
                    $destinationPath = public_path('/storage/video');
                    $link->move($destinationPath, $filename);
                    $content->link = '/storage/video/' . $filename;
                }
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        return redirect()->route('manageCourse')->with('success', 'Content posted!');
    }


    public function destroy($id)
    {
        //take content to delete
        $content = ContentCourse::where('id', $id)->first();

        $course = Course::where('id', $content->id_course)->first();
        $sum = ContentCourse::where('id_course', $course->id)->count();

        if ($sum == 1) {
            return redirect()->route('editContent', ['id_course' => $course->id, 'id_content' => $content->id])->with('error', 'You cannot delete the last content!');
        }
        $content->delete();

        $contents = ContentCourse::where('id_course', $course->id)->get();

        return redirect()->route('editContent', ['id_course' => $course->id, 'id_content' => $contents[0]->id]);
    }
}
