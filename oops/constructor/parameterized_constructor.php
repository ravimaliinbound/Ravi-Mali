<?php
class Fruits
{
    public $name, $price;
    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    function showData()
    {
        echo "Fruit's name is : " . $this->name . "<br>";
        echo $this->name . "'s price is : " . $this->price . "<br><br>";
    }
}
$obj1 = new Fruits("Orange", 100);
$obj2 = new Fruits("Apple", 150);
$obj3 = new Fruits("Mango", 120);
$obj1->showData();
$obj2->showData();
$obj3->showData();
?>