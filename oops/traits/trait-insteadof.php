<?php
trait traitOne
{
    public function hello()
    {
        echo "Hello from traitOne...! <br>";
    }
}
trait traitTwo
{
    public function hello()
    {
        echo "Hello from traitTwo...! <br>";
    }
}
class Hello
{
    // use traitOne, traitTwo{
    //     traitOne::hello insteadof traitTwo;
    // }
    use traitOne, traitTwo {
        traitTwo::hello insteadof traitOne;
    }
    public function display()
    {
        echo "display() method of Hello Class Called...! <br>";
    }
}
$obj = new Hello;
$obj->hello();
?>