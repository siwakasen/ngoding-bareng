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
        $transactions = Transaction::where('id_bracket', $bracket->id)->get();
        return view('userPage.courses.checkoutPage', compact('user', 'bracket', 'transactions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bracket = Bracket::where('id', $request->id_bracket)->where('status', 'ongoing')->first();
        $bracket->status = 'pending';
        $user = Auth::user();
        $transactions = Transaction::where('id_bracket', $bracket->id)->get();

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = config('midtrans.isProduction');
        \Midtrans\Config::$isSanitized = config('midtrans.isSanitized');
        \Midtrans\Config::$is3ds = config('midtrans.is3ds');
        $items = [];
        foreach ($transactions as $transaction) {
            $items[] = array(
                'id' => $transaction->course->id,
                'name' => $transaction->course->title,
                'price' => $transaction->course->price,
                'quantity' => 1,
            );
        }
        $params = array(
            "transaction_details" => array(
                "order_id" => rand(),
                "gross_amount" => $bracket->total_price,
            ),
            "item_details" => $items,
            "customer_details" => array(
                "first_name" => $user->name,
                "last_name" => $user->username,
                "email" => $user->email,
                "phone" => $user->phone_number,
            ),
        );
        // Your Midtrans API call
        try {
            $snapToken = \Midtrans\Snap::getSnapToken($params);
        } catch (\Exception $e) {
            toastr()->error($e);
            return redirect()->route('cartPage');
        }

        $bracket->snap_token = $snapToken;
        $bracket->save();
        return redirect()->route('checkoutPage');
    }

    public function paymentSuccess()
    {
        $user = Auth::user();
        $bracket = Bracket::where('id_user', $user->id)->where('status', 'pending')->first();
        $bracket->status = 'paid';
        $bracket->save();
        return redirect()->route('dashboard')->with('success','Checkout success');
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
