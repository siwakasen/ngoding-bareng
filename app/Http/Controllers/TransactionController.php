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
        $bracket = Bracket::where('id_user', $user->id)->where('status', 'pending')->first();
        if (!$bracket) {
            return redirect()->route('cartPage');
        }
        return view('userPage.courses.checkoutPage', compact('user', 'bracket'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bracket = Bracket::where('id', $request->id_bracket)->where('status', 'ongoing')->first();
        $bracket->status = 'pending';
        $user = Auth::user();

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = config('midtrans.isProduction');
        \Midtrans\Config::$isSanitized = config('midtrans.isSanitized');
        \Midtrans\Config::$is3ds = config('midtrans.is3ds');

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $bracket->total_price,
            ),
            'customer_details' => array(
                'first_name' => $user->name,
                'last_name' => $user->username,
                'email' => $user->email,
                'phone' => $user->phone_number,
            ),
        );
        // Your Midtrans API call
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $bracket->snap_token = $snapToken;
        $bracket->save();
        return redirect()->route('checkoutPage');
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
        $user = Auth::user();
        $bracket = Bracket::where('id_user', $user->id)->where('status', 'pending')->first();
        $bracket->status = 'ongoing';
        $bracket->snap_token = null;
        $bracket->save();
        return redirect()->route('cartPage');
    }
}
