<?php
// Private Access Modifier
class Car
{
    public $name = "Volvo";
    function show()
    {
        echo $this->name;
    }
    private function display()
    {
        echo $this->name;
    }
}
$obj = new Car();
$obj->show();
// $obj->display(); // ERROR
?> 