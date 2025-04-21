<?php
class A
{
    public function show(){
        echo "show() method of Class A <br>";
    }
    public function display()
    {
        echo "display() method of Class A <br>";
    }
}
class B extends A
{
    public function display()
    {
        // A::display(); // to call display() of Class A
        echo "display() method of Class B <br>"; //This will print and display method of parent will be override
    }
}
$obj = new B;
$obj->show();
$obj->display();
?>