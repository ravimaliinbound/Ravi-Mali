<?php
// Public Access Modifier
class Car
{
    public $name = "Toyota";
    function show()
    {
        echo $this->name;
        echo "<br>";
    }
}
$obj = new Car();
$obj->show();
echo $obj->name;
?>