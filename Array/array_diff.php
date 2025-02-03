<?php
$arr1 = array("a"=>"Blue", "Red","Green", "Yellow");
$arr2 = array("b"=>"Blue", "Green", "Yellow");
print_r(array_diff($arr1,$arr2)); //Array ( [0] => Red )

echo "<br>";
$arr1 = array(1,2,3,4,5);
$arr2 = array(4,2,3,4,5,6);
print_r(array_diff($arr1, $arr2));
// This function checks only values
?>