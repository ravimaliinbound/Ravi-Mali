<?php
$arr = array("Apple"=>11, "Banana"=>19, "Mango"=>5,"Pineapple"=>27);
arsort($arr);
print_r($arr); // Array ( [Pineapple] => 27 [Banana] => 19 [Apple] => 11 [Mango] => 5 )
?>