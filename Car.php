<?php
include "engine.php";
class Car
{
   
public $brand;
public $model;
public $engine;


public function __construct($brand, $model, $engine)
{
    $this->brand=$brand;
    $this->model=$model;
    $this->engine=$engine;
}

public function setBrand($brand)
{
    $this->brand=$brand;
    return $this;
}

public function setModel($model)
{
    $this->model=$model;
    return $this;
}

public function displayCarInfo()
{
    echo "Car: $this->brand $this->model with engine type: ".$this->engine->type. "\n"; 
}


}

// $engine= new Engine("V8");

$car=new Car("Ford","Mustang", new Engine("V8"));

$car->setBrand("Chevrolet")->setModel("Camareo")->engine->settype("V8");
$car->displayCarInfo();

// echo "Engine Type: ". $car->engine->type."\n";
// echo "Car Model: ". $car->model . "\n";




