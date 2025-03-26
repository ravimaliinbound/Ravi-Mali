<?php
class First
{
    function show()
    {
        echo "Show Function of Parent Class Called <br>";
    }
}
class Second extends First
{
    function display()
    {
        echo "Display Function of Child Class called";
    }
}
$obj = new Second();
$obj->show();
$obj->display();
?>