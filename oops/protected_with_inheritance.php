<?php
class First
{
    function show()
    {
        echo "show() function of parent class called<br>";
    }
    protected function display()
    {
        $this->show();
        echo "protected display() function of parent class called from child class    <br>";
    }
}
class Second extends First
{
    function call()
    {
        $this->display();
        echo "Hello";
    }
}
$obj = new Second();
$obj->call();
?>