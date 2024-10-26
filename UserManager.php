<?php

abstract class UserManager
{
    abstract public function authenticate($username, $password);

    public function logout(){
        echo "User logged out. \n";
    }
}

