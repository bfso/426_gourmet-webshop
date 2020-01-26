<?php

namespace App\Http\Controllers;

use App\Shop\Payment\PaymentManager;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function payment() {
        return view('checkout.payment');
    }
    
    public function pay(Request $request){
        $paymentManager = new PaymentManager();
        if($request->payment_type == 'paypal')
        {
            $paymentManager->payWithPayPal();
        }
        if($request->payment_type == 'creditcard')
        {
            $paymentManager->payWithCreditCard();
        }
    }
}
