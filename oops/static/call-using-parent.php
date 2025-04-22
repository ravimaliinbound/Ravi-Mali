<?php
class myClass
{
    public static function mystatic()
    {
        echo "This is a static method...! <br>";
    }
}
class yourClass extends myClass
{
    public function show()
    {
        parent::mystatic();
        echo "This is a normal Method...! <br>";
    }
}
myClass::mystatic();
$obj = new yourClass();
$obj->show();
$obj->mystatic();
?>