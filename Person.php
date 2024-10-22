<?php

class Person
{
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName=$firstName;
        $this->lastName=$lastName;
    }

    public function getFullName()
    {
        return $this->firstName." ". $this->lastName;
    }

    public function greet()
    {
        echo "Hello, ". $this->getFullName();
    }
}

$person=new Person("Faisal","Ahmed");

$person->greet();
