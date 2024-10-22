<?php

include "Payment.php";

class PaypalPayment extends Payment
{
    public function process()
    {
        echo "Processing Paypal payment. \n";
    }
    
}

$payment2=new PaypalPayment();
$payment2->process();
$payment2->logTransaction();