<?php

class BankAccount
{
    private $balance;

    public function __construct($initialBalance)
    {
        $this->balance=$initialBalance;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        if($amount>0){
            $this->balance+=$amount;
        }else{
            echo "Invalid deposit amount!";
        }
    }

    public function withdraw($amount)
    {
        if($amount>0 && $amount<=$this->balance){
            $this->balance -=$amount;
        }else {
            echo "Invalid withdrawal amount!";
        }
    }
}

$account =new BankAccount(1000);
$account->deposit(5000);
echo "xxxxxxxxxxx \n";
echo $account->getBalance();
echo "\n xxxxxxxxxxx \n";

$account->withdraw(2000);
echo $account->getBalance();
