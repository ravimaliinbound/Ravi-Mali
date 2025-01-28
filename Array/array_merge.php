<?php
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2)); //Array ( [0] => red [1] => green [2] => blue [3] => yellow )
echo "<br>";

$array1 = array(1,2,"b"=>1,"color" => "red", 4);
$array2 = array("a", "b"=>2, "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2); //Array ( [0] => 1 [1] => 2 [b] => 2 [color] => green [2] => 4 [3] => a [shape] => trapezoid [4] => 4 )
print_r($result);
echo "<br>";
$a1=array("red","green","green");
print_r(array_merge($a1)); //Array ( [0] => red [1] => green [2] => green )
echo "<br>";

$a=array(3=>"red",4=>"green");
print_r(array_merge($a)); //Array ( [0] => red [1] => green )     
?>