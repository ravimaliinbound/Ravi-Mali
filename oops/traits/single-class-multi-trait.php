<?php
trait myfirsttrait
{
    public function firstMethod()
    {
        echo "firstmethod() method called...! <br>";
    }
}
trait mysecondtrait
{
    public function secondMethod()
    {
        echo "secondMethod() called...! <br>";
    }
}
class MyClass
{
    use myfirsttrait, mysecondtrait;
}
$obj = new MyClass;
$obj->firstMethod();
$obj->secondMethod();
?>