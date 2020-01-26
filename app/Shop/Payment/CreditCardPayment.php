<?php

namespace App\Shop\Payment;

class CreditCardPayment implements PaymentInterface
{
    public function pay() {
        echo "payWithCreditCard";
    }
}
