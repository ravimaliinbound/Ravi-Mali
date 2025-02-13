<?php
class Car
{
    function __construct()
    {
        echo "Constructor Called";
        echo "<br>";
    }
    function __destruct()
    {
        Car::__construct(); // Calling Constructor Implicitly
        echo "Destructor Called";
        echo "<br>";
    }
}
$obj = new Car();
?> 