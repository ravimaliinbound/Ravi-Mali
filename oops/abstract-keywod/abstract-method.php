<?php
abstract class ABC
{
    abstract function show();
    abstract function display();
}
class B extends ABC
{
    function show()
    {
        echo "show() method called...! <br>";
    }
    function display()
    {
        echo "display() method called...! <br>";
    }
}
$obj = new B;
$obj->show();
$obj->display();
?>