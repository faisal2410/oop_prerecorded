<?php
include "PaymentGateway.php";


class Bkash implements PaymentGateway
{
    public function processPayment(float $amount): bool
    {
        echo "Processing a payment of $amount via Bkash.";
        return true;
    }
}
