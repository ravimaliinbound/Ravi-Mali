<?php
class myClasses
{
    public static function myStatic()
    {
        echo "Static method called...! <br>";
    }
    public function normalMethod()
    {
        echo "Normal method called...! <br>";
        self::myStatic();
    }
}
// myStaticClass ::myStatic();
$obj = new myClasses;
$obj->normalMethod();
?>