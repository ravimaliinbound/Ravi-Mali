<?php
class Fruits
{
    public $name;
    public $color;
    public $price;

    function getname()
    {
        echo "The Price of ". $this->color. " " . $this->name. " is : ". $this->price;
        echo "<br>";
       
    }
    function setname($name,$color, $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }
}
$apple = new Fruits();
$banana = new Fruits();

$apple->setname("Apple", "Red", 100);
$apple->getname(); // The Price of Red Apple is : 100
$banana->setname("Banana", "Yellow", 80);
$apple->getname(); // The Price of Red Apple is : 100
$banana->getname(); // The Price of Yellow Banana is : 80
?>