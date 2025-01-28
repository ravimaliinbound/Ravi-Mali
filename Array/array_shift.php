<?php
$arr = array("a"=>"Rajesh","b"=>"Ravi", "c"=>"Karan", "d"=>"Ashish");
array_shift($arr);
print_r($arr); // Array ( [b] => Ravi [c] => Karan [d] => Ashish )
?>