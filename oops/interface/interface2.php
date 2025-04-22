<?php
interface showInterface
{
    public function myShow();
}
class MyShow implements showInterface
{
    public function myShow()
    {
        echo "myshow() method of MyShow class called...! <br>";
    }
}
class MyDisplay extends MyShow implements showInterface
{
    public function myShow()
    {
        MyShow::myShow();
        echo "myshow() method of MyDisplay class called...! <br>";
    }
}
$obj = new MyDisplay;
$obj->myShow();

// $obj2 = new MyShow;
// $obj2->myShow();
?>