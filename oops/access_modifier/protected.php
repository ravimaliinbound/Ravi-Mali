<?php
class Car{
    protected $name = "Mustang GT";
    public function show()
    {
        echo $this->name."<br>";
    }
}
class Car2 extends Car{
    function display(){
        echo $this->name;
    }
}
$obj = new Car;
$obj2 = new Car2;
$obj->show(); // Mustang GT
$obj2->display(); // Mustang GT
// echo $obj->name; //  Cannot access protected property Car::$name
// echo $obj2->name; //  Cannot access protected property Car::$name
?>