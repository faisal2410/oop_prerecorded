<?php

abstract class Animal
{
 abstract public function sound();

 public function eat()
 {
    echo "This animal is eating. \n";
 }
}

// $animal= new Animal();
