<?php
trait myTrait
{
    public function myshow()
    {
        echo "Hello World...! <br>";
    }
}
class Book
{
    use myTrait{
        myTrait::myshow as hello;
    }
    public function showw()
    {
        echo "showw method of Book Class called...!";
    }
}
$obj = new Book;
$obj->hello();
$obj->myshow(); // still we can call like this (after alias) 
$obj->showw();
?>