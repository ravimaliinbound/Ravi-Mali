<?php
class Car{
    private $name = 'Mustang GT';
    function show(){
        echo $this->name;
    }
}
$obj = new Car;
$obj->show();
//echo $obj->name; //  Cannot access private property Cars::$name in C:\xfinal\htdocs\ravi-kumar\oop\access_modifier\private.php:10
?>