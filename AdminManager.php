<?php
include "UserManager.php";

class AdminManager extends UserManager
{
    public function authenticate($username, $password)
    {
        if($username==='admin' && $password==='adminpass'){
            echo "Admin Authenticated successfully. \n";
        }else{
            echo "Invalid admin credentials, \n";
        }
    }
}


$admin =new AdminManager();
$admin->authenticate('admin','adminpass');
$admin->logout();