<?php
include "Payment.php";
class CreditCardPayment extends Payment
{
    public function process()
    {
        echo "Processing credit card payment \n";
    }

    public function logTransaction()
    {
        echo "Credit card payment transaction logged. \n";
    }
}

$payment1 =new CreditCardPayment();
$payment1->process();
$payment1->logTransaction();