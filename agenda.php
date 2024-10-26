<?php

// Title: Understanding Magic Methods in PHP Object-Oriented Programming

/*

Agenda :

1.What Are Magic Methods in PHP?
2.The __set() and __get() Magic Methods
3.The __call() Magic Method
4.The __toString() Magic Method
5.The __debugInfo() Magic Method


*/ 

/*


In PHP, magic methods are special methods that start with double underscores (__). They are predefined by PHP and provide special behaviors when specific actions are performed on objects. Magic methods allow us to customize how an object behaves when interacting with properties or methods dynamically.

Common Characteristics:
Automatically triggered during specific actions.
Often used for handling dynamic or hidden behavior.
Begin with __.

__set() is invoked when trying to set the value of an inaccessible or undefined property.
__get() is invoked when trying to get the value of an inaccessible or undefined property.
__call() is triggered when an undefined method is called.
__toString() is triggered when an object is treated as a string.
__debugInfo() is triggered when var_dump() is called on an object.
*/ 

