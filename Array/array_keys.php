<?php
$arr = array("name"=>"Ravi", "age"=>21, "nationality"=>"Indian");
print_r(array_keys($arr)); //Array ( [0] => name [1] => age [2] => nationality )
echo "<br>";

$arr = array(10,20,30,40);
print_r(array_keys($arr,10)); //Array ( [0] => 0 )
echo "<br>";

$arr = array(10,20,30,"10");
print_r(array_keys($arr,10)); //Array ( [0] => 0 [1] => 3 )
echo "<br>";

$arr = array(10,20,30,"10");
print_r(array_keys($arr,10,true)); //Array ( [0] => 0 )
echo "<br>";

$arr = array(10,20,30,"10");
print_r(array_keys($arr,"10" ,true)); //Array ( [0] => 3 )
?>