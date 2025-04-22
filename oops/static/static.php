<?php
class Human
{
    public static function sleep()
    {
        echo "They are sleeping...! <br>";
    }
    public function eat()
    {
        echo "Ther are eating food...! <br>";
    }
}
Human::sleep(); // Static method can be called without object
// Human::eat(); // Error :  Non-static method Human::eat() cannot be called statically 
$obj = new Human;
$obj->eat();
$obj->sleep(); //Can be called through object
?>