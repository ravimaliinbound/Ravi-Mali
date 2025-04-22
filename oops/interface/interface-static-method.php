<?php
interface myanimal
{
    public static function horse();
}
interface animals
{
    public static function elephant();
    public static function tiger();
}
class showAnimal implements myanimal, animals
{
    public static function horse()
    {
        echo "horse() method implemented...! <br>";
    }
    public static function elephant()
    {
        echo "elephant() method implemented...! <br>";
    }
    public static function tiger()
    {
        echo "tiger() method implemented...!";
    }
}
showAnimal::horse();
showAnimal::elephant();
showAnimal::tiger();
?>