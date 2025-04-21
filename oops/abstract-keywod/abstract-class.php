<?php
abstract class A
{
    public function show()
    {
        echo "show() Method of Class A <br>";
    }
}
class B extends A
{
    public function display()
    {
        echo "display() method of Class B <br>";
    }
}
// $obj = new A; //  Cannot instantiate abstract class A
$obj = new B;
$obj->display();
$obj->show();
?>