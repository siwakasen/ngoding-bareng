<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use App\Models\Bracket;
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
        $courses = $courses->where('status',1)->sortBy('id')->values()->all();
        return view('userPage.courses.coursePage', compact('courses', 'categories', 'user', 'user_courses', 'cart_courses'));
    }

    public function filter($id)
    {
        $categories = Category::all();
        $user = Auth::user();
        $courses = Course::where('id_category', $id)->where('status',1)->get();
        return view('userPage.courses.coursePage', compact('courses', 'categories', 'user'));
    }
    public function search(Request $request)
    {
        $input = $request->search;
        $categories = Category::all();
        $user = Auth::user();
        $courses = Course::where(function($query) use ($input) {
            $query->where('title', 'like', '%' . $input . '%')
                ->orWhereHas('category', function ($query) use ($input) {
                    $query->where('name', 'like', '%' . $input . '%');
                })
                ->orWhere('price', 'like', '%' . $input . '%');
        })
        ->where('status', '!=', 0) // Exclude data where status is 0
        ->get();
        return view('userPage.courses.coursePage', compact('courses', 'categories', 'user'));
    }
    public function show($id)
    {
        $content = ContentCourse::where('id_course', $id)->first();
        return redirect('contentCourse/' . $id . '/' . $content->id);
    }

    public function filterAdmin($id)
    {
        $categories = Category::all();
        $count_course = Course::all()->count();

        $courses = Course::where('id_category', $id)->get();
        $total_revenue = Bracket::all()->where('status', 'paid')->sum('total_price');
        return view('adminPage.courses.manageCourse', compact('courses',  'total_revenue', 'categories', 'count_course'));
    }


    public function toggleStatus($id)
    {
        $course = Course::find($id);
        if ($course) {
            $newStatus = $course->status == 1 ? 0 : 1;
            $course->status = $newStatus;
            $course->save();
            return redirect()->route('manageCourse')->with('success', 'Course status updated!');
        } else {
            return redirect()->route('manageCourse')->with('error', 'Course not found!');
        }
    }
    public function create()
    {
        $categories = Category::all();
        $edit = false;
        return view('adminPage.courses.createCourse', compact('categories', 'edit'));
    }
    public function edit($id)
    {
        $course = Course::find($id);
        $edit = true;
        $categories = Category::all();
        return view('adminPage.courses.createCourse', compact('categories', 'course', 'edit'));
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'id_category' => 'required',
                'title' => 'required',
                'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'price' => 'required',
            ]);
            $course = new Course();
            $course->title = $request->title;
            $course->id_category = $request->id_category;
            $course->price = $request->price;
            $course->status = 0;

            $thumbnail = $request->file('thumbnail');
            $filename = 'course' . time() . '.' . $thumbnail->getClientOriginalExtension();
            $destinationPath = public_path('/storage/thumbnail');
            $thumbnail->move($destinationPath, $filename);
            $course->thumbnail = '/storage/thumbnail/' . $filename;

            $course = Course::create($course->toArray());
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->route('createContent', ['id_course' => $course->id]);
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'id_category' => 'required',
                'title' => 'required',
                'price' => 'required',
            ]);
            $course = Course::find($request->id_course);
            $course->title = $request->title;
            $course->id_category = $request->id_category;
            $course->price = $request->price;

            if ($request->file('thumbnail') != null) {
                $thumbnail = $request->file('thumbnail');
                $filename = 'course' . time() . '.' . $thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('/storage/thumbnail');
                $thumbnail->move($destinationPath, $filename);
                if ($course->thumbnail != null) {
                    unlink($course->thumbnail);
                }
                $course->thumbnail = '/storage/thumbnail/' . $filename;
            }

            $course->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        $content = ContentCourse::where('id_course', $request->id_course)->first();
        return redirect()->route('editContent', ['id_course' => $course->id, 'id_content' => $content->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $course = Course::find($id);
            $course->delete();
            return redirect()->route('manageCourse')->with('success', 'Course deleted!');

        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
