<?php

namespace App\Shop\Payment;

class Payment
{
    public function pay($type){
        if($type == 'paypal')
        {
            echo "payWithPayPal";
        }
        if($type == 'creditcard')
        {
            echo "payWithCreditCard";
        }
    }
}
