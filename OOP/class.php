<?php
class Fruits
{
    public $name = "Apple";
    public $color = "Red";
    function getname()
    {
        echo $this->name;
        echo "<br>";
    }
    function setname()
    {
        $this->name = "Banana";
    }
}
$obj = new Fruits();
echo $obj->color;
echo "<br>";
$obj->getname();
$obj->setname();
$obj->getname();

?> 