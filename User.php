<?php

class User
{
    private $userName ="Faisal ahmed";

    public function __get($name)
    {
        echo "$name property is not defined";
    }

    public function __set($name, $value){

        echo "You can not set the property $name and its $value \n";

    }

    public function __call($name, $arguments){
        echo "$name is not defined, but you are trying to call with arguments \n";
        print_r($arguments);


    }

    public function __toString()
    {
        return "Your are trying to print this user object which has only property $this->userName";
    }

    public function __debugInfo()
    {
        return [
            "My user name"=>$this->userName,
            "Age"=>"Age property is not defined"
        ];
    }


}

$user=new User();

// echo $user;
var_dump($user);

// echo $user->age =50;

// echo $user->test("Testing the user");