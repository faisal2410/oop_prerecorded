<?php
include "Shapes.php";

class Circles extends Shapes
{
    public $radius;
    public function __construct($radius)
    {
        $this->radius=$radius;
    }

    public function area(){
        return pi()*pow($this->radius,2);
    }

}


$c1=new Circles(5);

echo $c1->area();