<?php
class myClass
{
    public static $num = 0;
    public function __construct()
    {
        self::$num++;
        echo "Number is : ". self::$num . "<br>";
    }
    public static function myShow()
    {
        echo "<br>Number is : ". self::$num;
    }
}
for($i=0; $i<5; $i++)
{
    $obj = new myClass;
}
myClass::myShow();
?>