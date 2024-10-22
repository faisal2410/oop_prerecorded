<?php
// include "stripe.php";
// include "paypal.php";
include "Bkash.php";
class PaymentProcessor
{
    private PaymentGateway $gateway;

    public function __construct(PaymentGateway $gateway)
    {
        $this->gateway=$gateway;
    }

    public function process(float $amount)
    {
        $this->gateway->processPayment($amount);

    }
}

// $paymentStripe=new PaymentProcessor(new Stripe());

// $paymentPaypal =new PaymentProcessor(new Paypal());

// $paymentStripe->process(200.5);
// $paymentPaypal->process(500.3);

$paymentBkash=new PaymentProcessor(new Bkash());
$paymentBkash->process(300.2);