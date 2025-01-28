<?php
$arr = array("Ravi", "Karan", "Rajesh", "Ashish", "Ketan");
$rand_keys = array_rand($arr, 2);
echo $arr[$rand_keys[0]] . "<br>"; // Random 
echo $arr[$rand_keys[1]] . "<br>"; // Random
?>