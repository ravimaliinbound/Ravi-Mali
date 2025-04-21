<?php
class Fruits
{   
    public $name= "Ravi";
    function __destruct() // Auto-executes when object destroys (in the end of the script)
    {
        echo "Destructor Function Called<br>";
    }
    function __construct()
    {
        Fruits::__destruct(); // Calling destructor explicitly
        echo "Constructor Function Called<br>"; // Auto-executes on object creation
    }

}
$obj = new Fruits();
echo $obj->name."<br>";
?>