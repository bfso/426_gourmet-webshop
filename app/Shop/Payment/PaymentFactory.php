<?php

namespace App\Shop\Payment;

class PaymentFactory
{
    public function createPayment($type){
        if($type == 'paypal')
        {
            return new PayPalPayment();
        }
        if($type == 'creditcard')
        {
            return new CreditCardPayment();
        }
    }
}
