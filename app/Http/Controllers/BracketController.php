<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bracket;
use App\Models\Transaction;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;


class BracketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $user_courses = Course::whereHas('transaction.bracket', function ($query) use ($user) {
            $query->where('id_user', $user->id)->where('status', 'ongoing');
        })->get();
        $total = 0;
        foreach ($user_courses as $course) {
            $total += $course->price;
        }
        $courses = Course::whereNotIn('id', $user_courses->pluck('id'))->get();
        session()->flash('cart_item_added', true);
        return view('userPage.courses.chartPage', compact('user', 'user_courses', 'courses', 'total'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($id_course)
    {

        $bracket = Bracket::where('id_user', Auth::user()->id)->where('status', 'ongoing')->first();
        if ($bracket) { //if bracket exists
            $transaction = Transaction::create([
                'id_course' => $id_course,
                'id_bracket' => $bracket->id,
                'date' => date('Y-m-d'),
            ]);
            $bracket->total_price += Course::find($id_course)->price;
            $bracket->save();
            return redirect()->back();
        }

        //if bracket doesn't exist
        $user = Auth::user();
        $bracket = Bracket::create([
            'id_user' => $user->id,
            'total_price' => 0,
            'status' => 'ongoing',
        ]);
        $transaction = Transaction::create([
            'id_course' => $id_course,
            'id_bracket' => $bracket->id,
            'date' => date('Y-m-d'),
        ]);
        $bracket->total_price += Course::find($id_course)->price;
        $bracket->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Bracket $bracket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bracket $bracket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bracket $bracket)
    {
        //
    }
}
