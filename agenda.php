<?php

// Title: Mastering Static Methods and Properties in PHP Object-Oriented Programming
/*
Agenda :

1.What are Static Methods and Properties?
2.Defining Static Methods and Properties
3.How to Access Static Methods and Properties
4.The self:: Keyword in PHP
5.Use Cases of Static Methods and Properties in Real-World Applications


*/ 

/*
static methods and static properties belong to the class itself rather than to any specific instance of the class. This means that they can be accessed without creating an object of the class.

Key Concept:

Instance methods and properties require an object to be accessed.
Static methods and properties are accessed directly from the class.

When working within the same class, you can use the self:: keyword to refer to static methods and properties. This is especially useful when one static method calls another or when a static method accesses a static property.

Static methods and properties are commonly used when we want to associate functionality or data with the class rather than an instance. Some common use cases include utility functions, configuration settings, or maintaining counters.

The Singleton pattern relies on static properties to hold the instance of the class.

Static properties are useful for defining global configuration settings that can be accessed from anywhere in the application.


*/ 