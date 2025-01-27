<?php
$arr = array("Name"=>"Ravi", "Age"=>21);
print_r(array_change_key_case($arr,CASE_UPPER));
echo "<br>";
print_r(array_change_key_case($arr,CASE_LOWER));
?>