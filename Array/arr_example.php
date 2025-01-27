<?php
$fruits = array (
    "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third")
);
print_r($fruits);
echo "<br>";


$array = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);
print_r($array);
echo "<br>";


$month = array(1=>"January", "February", "March");
print_r($month);
echo "<br>";

//Accessing array inside double quotes
echo "<br>Accessing array inside double quotes <br>";
$arr = array("Name"=>"Ravi");
echo "Hello {$arr['Name']}";
?>