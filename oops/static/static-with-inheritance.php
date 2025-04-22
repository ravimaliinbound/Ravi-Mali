<?php
class myClasses
{
    public static function show()
    {
        echo "Static method show() called...! <br>";
    }
}
class yourClass extends myClasses
{
    public static function myshow()
    {
        self::show();
    }
}
yourClass::myshow();
?>