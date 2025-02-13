<?php
class First
{
    function show()
    {
        echo "show() function of First class <br>";
    }
    function display()
    {
        echo "display() function of First class <br>";
    }
}
class Second extends First
{
    function show()
    {
         echo "show() function of Second class <br>";
         First::show();
    }
    function display()
    {
        First::display();
        echo "display() function of Second class <br>";
    }
}
$obj = new Second();
$obj->show();
$obj->display();
?>