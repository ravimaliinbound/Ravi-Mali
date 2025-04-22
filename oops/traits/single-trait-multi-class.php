<?php
trait firstTrait
{
    public function traitMethod()
    {
        echo "traitMethod called...! <br>";
    }
}
class FirstClass
{
    use firstTrait;
    public function firstShow()
    {
        echo "firstShow method called...! <br>";
    }
}
class SecondClass extends FirstClass
{
    public function secondShow()
    {
        echo "secondShow method called...! <br>";
    }
}
$obj = new SecondClass;
$obj->secondShow();
$obj->traitMethod();
$obj->firstShow();
?>