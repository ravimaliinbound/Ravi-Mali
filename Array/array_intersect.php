<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_intersect($a1,$a2);
print_r($result); // Array ( [a] => red [b] => green [c] => blue )
// compares the values of two arrays, and returns the matches
?>