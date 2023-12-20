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
        
        $courses = collect([]);
        $categories = Category::all();
        $user = Auth::user();
        //courses that user have
        $user_courses = Course::whereHas('transaction.bracket', function ($query) use ($user) {
            $query->where('id_user', $user->id)->where('status', 'paid');
        })->get();
        foreach ($user_courses as $item) {
            $item->stats = 'Owned';
        }
        $courses = $courses->merge($user_courses);


        //courses on cart
        $cart_courses = Course::whereHas('transaction.bracket', function ($query) use ($user) {
            $query->where('id_user', $user->id)->where('status', 'ongoing');
        })->get();
        foreach ($cart_courses as $item) {
            $item->stats = 'On Cart';
        }
        $courses = $courses->merge($cart_courses);

        //courses that user haven't buy or put on cart
        $coursesNotBuy = Course::whereNotIn('id', $user_courses->pluck('id'))
        ->whereNotIn('id', $cart_courses->pluck('id'))
        ->get();
        $courses = $courses->merge($coursesNotBuy);

        //sort by id
        $courses = $courses->sortBy('id')->values()->all();
        return view('userPage.courses.coursePage', compact('courses', 'categories', 'user', 'user_courses', 'cart_courses'));
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
