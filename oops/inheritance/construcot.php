<?php
class A
{
    public function __construct()
    {
        echo "This is parent constructor";
    }
}
class B extends A
{
}
$obj = new B;
?>