<?php
// set the error reporting level
error_reporting(E_ALL);
ini_set('display_errors', 1);

//global variable
$num1 = 10;

function add(){
    global $num1;
    echo $num1;
}

add();

echo "<br>";

function subtract(){
    global $num1;
    echo $num1 - 5;
}
subtract();
echo "<br>";
?>