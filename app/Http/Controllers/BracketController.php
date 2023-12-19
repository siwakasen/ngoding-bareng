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
        //retrieve all courses that put on cart
        $transactions = Transaction::whereHas('bracket', function ($query) use ($user) {
            $query->where('id_user', $user->id)->where('status', 'ongoing');
        })->get();
        //retrieve all courses that user already buy
        $user_courses = Transaction::whereHas('bracket', function ($query) use ($user) {
            $query->where('id_user', $user->id)->where('status', 'paid');
        })->get();
        $courses = Course::whereNotIn('id', $transactions->pluck('id_course'))
        ->whereNotIn('id', $user_courses->pluck('id_course'))
        ->get();
        
        $bracket = Bracket::where('id_user', Auth::user()->id)->where('status', 'ongoing')->first();
        return view('userPage.courses.chartPage', compact('user', 'transactions', 'courses', 'bracket'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($id_course)
    {
        toastr()->success('Item added to cart');

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
    public function destroy($id)
    {
        $transaction = Transaction::find($id);
        $bracket = Bracket::find($transaction->id_bracket);
        $bracket->total_price -= Course::find($transaction->id_course)->price;
        if($bracket->total_price < 0){

            $bracket->total_price = 0;
        }
        $bracket->save();
        $transaction->delete();
        return redirect()->back();
    }
}
