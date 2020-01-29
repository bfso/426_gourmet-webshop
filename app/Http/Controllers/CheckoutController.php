<?php

namespace App\Http\Controllers;

use App\Shop\Payment\Payment;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function payment() {
        return view('checkout.payment');
    }
    
    public function pay(Request $request){
        $payment = new Payment();
        $payment->pay($request->payment_type);
    }
}
