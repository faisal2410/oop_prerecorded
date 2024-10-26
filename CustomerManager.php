<?php
include "UserManager.php";

class CustomerManager extends UserManager
{
    public function authenticate($username, $password)
    {
        if($username==='customer' && $password='customerpass'){
            echo "Customer Authenticated successfully. \n";
        }
    }
}

$customer =new CustomerManager();
$customer->authenticate('customer','customerpass');
$customer->logout();
