<?php

// Data Types in PHP
// PHP supports several data types, including:
// 1. String: A sequence of characters, enclosed in single or double quotes.
$greeting = "Hello, World!";
// 2. Integer: A whole number, without a decimal point.
$age = 25;
// 3. Float: A number with a decimal point.
$price = 19.99;
// 4. Boolean: A true or false value.
$isActive = true;
// 5. Array: A collection of values, which can be of different types.
$fruits = array("apple", "banana", "cherry");
// 6. Object: An instance of a class, which can contain properties and methods.
class Car {
    public $color;
    public $model;

    function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
}
$myCar = new Car("red", "Toyota");
// 7. NULL: A special type that represents a variable with no value.
$emptyValue = null;
// 8. Resource: A special variable that holds a reference to an external resource, such as a database connection or file handle.


?>