<?php
interface myInterface
{
    public function show();
    public function display();
}
class Animal implements myInterface
{
    public function show()
    {
        echo "show() method implemented <br>";
    }
    public function display()
    {
        echo "display() method implemented <br>";
    }
}
$obj = new Animal;
$obj->show();
$obj->display();
?>