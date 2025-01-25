<?php
$arr = array(1,2,3,4,5);
var_dump($arr); //array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
echo "<br>";

// unset($arr[3]);
// $arr = array_values($arr);
// var_dump($arr);  //array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }

$arr = array_diff($arr, [4]);
$arr= array_values($arr);
var_dump($arr); // array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }

//array_diff() and unset() both will give the same output
?>