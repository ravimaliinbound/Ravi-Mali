<?php
class myClass
{
    public function __construct()
    {
        echo "Constructor Called...! <br>";
    }
}
class mySecondClass extends myClass
{
    // public function __construct()
    // {
    //     echo "Sechond Constructor Called...! <br>";
    // }
    public function display()
    {
        echo "display() method called...!";
    }
}
$obj = new mySecondClass(); // Constructor Called...!
?>