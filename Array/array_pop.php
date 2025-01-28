<?php
$arr = array(1,2,3,4);
$a = array_pop($arr);
print_r($arr); // Array ( [0] => 1 [1] => 2 [2] => 3 )
echo "<br> Deleted element is $a"; // Deleted element is 4
?>