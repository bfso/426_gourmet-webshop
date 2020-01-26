<?php

namespace App\Http\Controllers;

use App\Shop\Payment\PaymentFactory;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function payment() {
        return view('checkout.payment');
    }
    
    public function pay(Request $request){
        $paymentFactory = new PaymentFactory();
        $payment = $paymentFactory->createPayment($request->payment_type);
        $payment->pay();
    }
}
