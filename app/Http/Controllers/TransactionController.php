<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Bracket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $bracket = Bracket::where('id_user', Auth::user()->id)->where('status', 'ongoing')->first();
        return view('userPage.courses.checkoutPage', compact('user','bracket'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bracket = Bracket::where('id_user', $request->id_bracket)->where('status', 'ongoing')->first();
        $bracket->status = 'paid';
        $bracket->save();
        toastr()->success('Checkout success');
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
