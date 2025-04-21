<?php
class Students
{
    public $name = "Ravi Mali";
    function show()
    {
        echo $this->name . "<br>";
    }
}
$obj = new Students;
$obj->show();
echo $obj->name . "<br>";


// Note : public properties can be accessed any where(inside the class, inside the subclass or outside the class)

?>