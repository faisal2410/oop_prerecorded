<?php
include "Shape.php";
class Rectangle extends Shape
{
    public function draw()
    {
        echo "Drawing a Rectangle \n";
    }
}

$r1=new Rectangle();

$r1->draw();