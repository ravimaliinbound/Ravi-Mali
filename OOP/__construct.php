<?php
class Fruits
{
    public $name;
    function __construct()
    {
        $this->name = "Apple";
        echo $this->name;
    }
}
$obj = new Fruits();
?> 