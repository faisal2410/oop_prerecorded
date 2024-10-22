<?php

include "PaymentGateway.php";

class Paypal implements PaymentGateway
{
    public function processPayment(float $amount): bool
    {
        echo "Processing payment $amount via Paypal.";
        return true;
    }
}