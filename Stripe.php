<?php
include "PaymentGateway.php";


class Stripe implements PaymentGateway
{
    public function processPayment(float $amount): bool
    {
        echo "Processing a payment of $amount via Stripe.";
        return true;
    }

   
}


