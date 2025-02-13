<?php
// Protected Access Modifier
class Car
{
    public $name = "Audi";
    function show()
    {
        echo $this->name;
    }
    protected function display()
    {
        echo $this->name;
    }
}
$obj = new Car();
$obj->show(); // Audi
// $obj->display();  // ERROR
?>