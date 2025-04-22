<?php
trait mytrait
{
    public function method1()
    {
        echo "method1 called...! <br>";
    }
    public function method2()
    {
        echo "method2 called...! <br>";
    }
}
class showTraitClass
{
    use mytrait;
    public function extra()
    {
        echo "extra method called...!";
    }
}
$obj = new showTraitClass;
$obj->method1();
$obj->method2();
$obj->extra();
?>