<?php
class A
{
    public function __construct()
    {
        echo "Constructor of Class A called <br>";
    }
}
class B extends A
{
    public function __construct()
    {
       // Parent::__construct();  // To call constructor of parent classm explicitly
        echo "Constructor of Class B called <br>";
    }
}
$obj = new B;
?>