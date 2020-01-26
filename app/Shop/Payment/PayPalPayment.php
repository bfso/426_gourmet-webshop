<?php

namespace App\Shop\Payment;

class PayPalPayment implements PaymentInterface
{
    public function pay() {
        echo "payWithPayPal";
    }
}
