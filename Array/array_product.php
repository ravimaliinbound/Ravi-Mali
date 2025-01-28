<?php
$arr = array(1,3,5,7);
print_r(array_product($arr)); // 105
echo "<br>";

$arr = array(1,3,"5"=>3,7);
print_r(array_product($arr)); // 63    => Value will be used for calculation not key..
?>