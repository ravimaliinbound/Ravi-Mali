<?php
$arr = array("a","b","c","d","e");
print_r(array_fill_keys($arr, "Blue")); // Array ( [a] => Blue [b] => Blue [c] => Blue [d] => Blue [e] => Blue )
?>