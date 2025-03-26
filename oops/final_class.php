<?php
final class First
{
    function show()
    {
        echo "show() function of First class <br>";
    }
}
class Second extends First // Fatal error: Class Second cannot extend final class First
{
    function display()
    {
        echo "display() function of Second class";
    }
}
$obj = new Second();
$obj->show();
$obj->display();
?>