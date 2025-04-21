<?php
class A
{
    public function show()
    {
        echo "show() method of Class A <br>";
    }
}
class B extends A
{
    public function display()
    {
        echo "display() method of Class B <br>";
    }
}
class C extends A
{
    public function show1()
    {
        echo "show1() method of Class C <br>";
    }
}
class D extends B
{
    public function fruit()
    {
        echo "fruit() method of Class D <br>";
    }
}
class E extends C
{
    public function animal()
    {
        echo "animal() methiod of Class E <br>";
    }
}
class F extends C
{
    public function vehicle()
    {
        echo "vehicle() method of Class F <br>";
    }
}
$obj = new F;
$obj1 = new E;
$obj2 = new D;

$obj->vehicle();
$obj->show();
$obj->show1();

$obj1->animal();
$obj1->show1();
$obj1->show();

$obj2->display();
$obj2->show();
?>