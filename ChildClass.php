<?php
include "BaseClass.php";
class ChildClass extends BaseClass
{
    public function displayMessage()
    {
        echo "This is the child class message";
    }
}


$child=new ChildClass();
$child->displayMessage();