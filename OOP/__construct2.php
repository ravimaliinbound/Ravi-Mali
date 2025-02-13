<?php
class Fruits
{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    function getname()
    {
        echo $this->name;
    }
}
$obj = new Fruits("Apple");
$obj->getname();
echo "<br>";
$banana = new Fruits("Banana");
$banana->getname();
?> 