<?php
class myClass
{
    public static function mystatic()
    {
        echo "This is a static method...! <br>";
    }
}
class otherClass
{
    public function show()
    {
        myClass::mystatic();
        echo "This is a Normal Method...! <br>";
    }
}
myClass::mystatic();
$obj = new otherClass;
$obj->show();
?>