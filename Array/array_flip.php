<?php
$a1=array(1=>"Ravi",2=>"Karan",3=>"Rajesh",4=>"Ashish");
$result=array_flip($a1);
print_r($result); //Array ( [Ravi] => 1 [Karan] => 2 [Rajesh] => 3 [Ashish] => 4 )
?>