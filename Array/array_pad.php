<?php
$arr = array(1,3,5);
print_r(array_pad($arr, 6, "blue")); // Array ( [0] => 1 [1] => 3 [2] => 5 [3] => blue [4] => blue [5] => blue )
echo "<br>";

$arr = array(1,3,5);
print_r(array_pad($arr, -6, "blue")); // Array ( [0] => blue [1] => blue [2] => blue [3] => 1 [4] => 3 [5] => 5 )
echo "<br>";

$arr = array(1,3,5);
print_r(array_pad($arr, 1, "blue")); // Array ( [0] => 1 [1] => 3 [2] => 5 )
?> 