<?php
class Fruits{
    function __construct($name="Ravi", $age= 21){
        echo "Age of ". $name. " is : ". $age."<br>";
    }
}
$obj = new Fruits();
$obj = new Fruits("Kiran", 23);
?>