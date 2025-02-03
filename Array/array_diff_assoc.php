<?php
$arr1 = array("a"=>"Ravi","b"=>"Karan","c"=>"Ashish","d"=>"Rajesh");
$arr2 = array("a"=>"Ravi","b"=>"Karan","c"=>"Ashish");
print_r(array_diff_assoc($arr1, $arr2)); // This function compares both keys and values
?>