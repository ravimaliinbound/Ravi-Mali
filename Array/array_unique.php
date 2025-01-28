<?php
$arr = array("a"=>"Ravi","b"=>"Rajesh","c"=>"Karan", "d"=>"Rajesh", "e"=>"Ashish");
print_r($arr); // Array ( [a] => Ravi [b] => Rajesh [c] => Karan [d] => Rajesh [e] => Ashish )
echo "<br>"; 
$a= array_unique($arr);
print_r($a); // Array ( [a] => Ravi [b] => Rajesh [c] => Karan [e] => Ashish )
?>