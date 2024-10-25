<?php

class Calculator
{
    public static $pi=3.1416;

    public static function add($a,$b)
    {
        return $a+$b;
    }

    public static function multiply($a,$b)
    {
        return $a * $b;
    }

    public function test()
    {
        echo "We are testing";
    }

    public  static function areaOfCircle($radious)
    {
        return self::$pi *$radious *$radious;
    }

    public static function describeCircle($radious)
    {
        $area=self::areaOfCircle($radious);
        return "A circle with radious $radious has an area of of $area";
    }
}

// $c1=new Calculator();

// $c1->pi;
// $c1->test();
// echo Calculator::$pi;

// echo Calculator::add(5,10);
// echo Calculator::multiply(10,5);

// Calculator::test();

// echo Calculator::areaOfCircle(5);
echo Calculator::describeCircle(4);
