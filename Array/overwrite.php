<?php
$arr = array(1=>"A", "1" => "B", 1.5=>"C", true => "D");
print_r($arr); //All keys are cast to same(1), so the value/output will be overwritten.
// Output : Array ( [1] => D )
?>