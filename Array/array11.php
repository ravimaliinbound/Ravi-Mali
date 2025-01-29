<?php
$arr = array("Ravi","Karan", "Rajesh","Aashish");
$new_arr = array_map('strlen',$arr);
echo "The Shortest Array Length Is : " . min($new_arr);
echo "<br> The Longest Array Length Is : " . max($new_arr);
?>