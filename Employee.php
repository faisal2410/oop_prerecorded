<?php

class Employee
{
    public $hours =600;
    public $hoursPrice =10;

    public function calculateSalary()
    {
        return $this->hours * $this->hoursPrice;
    }

    public function calculateSalary($hours, $hoursPrice)
    {

    }
}

$emp1=new Employee();

$emp1->calculateSalary();