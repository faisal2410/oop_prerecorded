<?php

abstract class Payment
{
    abstract public function process();

    public function logTransaction()
    {
        echo "Transaction Logged \n";
    }
}