<?php
class Fruits
{
    public $name;
   
}
$obj = new Fruits();
$obj->name = "Apple";
echo $obj->name. "<br>";
var_dump($obj instanceof Fruits);
?> 