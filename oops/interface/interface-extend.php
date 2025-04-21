<?php
interface myfirst
{
    public function show();
}
interface mysecond extends myfirst
{
    public function display();
}
class myclass implements myfirst, mysecond
{
    public function show()
    {
        echo "show() method implemented <br>";
    }
    public function display()
    {
        echo "display() method implemented";
    }
}
$obj = new myclass;
$obj->show();
$obj->display();
?>