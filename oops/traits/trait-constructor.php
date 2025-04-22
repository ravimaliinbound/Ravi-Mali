<?php
trait mytrait1
{
    public function __construct()
    {
        echo "Trait Constructor Called...! <br>";
    }
    public function showTrait()
    {
        echo "showTrait method called...! <br>";
    }
}
class myClass
{
    use mytrait1;

    // public function __construct()
    // {
    //     echo "Class Constructior Called...! <br>";
    // }
    public function show()
    {
        echo "show method called...! <br>";
    }
}
$obj = new myClass();
$obj->showTrait();
$obj->show();
?>