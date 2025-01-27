<?php
$arr = array('R','A','V','I','M','A','L','I');
print_r(array_chunk($arr, 2)); //Array ( [0] => Array ( [0] => R [1] => A ) [1] => Array ( [0] => V [1] => I ) [2] => Array ( [0] => M [1] => A ) [3] => Array ( [0] => L [1] => I ) )
echo "<br>";
print_r(array_chunk($arr, 2,true)); // Preserves key   Array ( [0] => Array ( [0] => R [1] => A ) [1] => Array ( [2] => V [3] => I ) [2] => Array ( [4] => M [5] => A ) [3] => Array ( [6] => L [7] => I ) )
?>