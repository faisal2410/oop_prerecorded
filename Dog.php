<?php
include "Animal.php";
class Dog extends Animal
{
    public function sound()
    {
        echo "Bark \n";
    }
}


$dog=new Dog();
$dog->sound();
$dog->eat();