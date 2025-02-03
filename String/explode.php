<?php
$str="Hello friends My Name is Ravi Mali.";
echo $str. "<br>"; 
echo "<br>"; 
$str= explode(" ", $str);
print_r($str);
echo "<br>";
echo "<br>";
$str = 'one,two,three,four';
print_r(explode(',',$str));
echo "<br>";
echo "<br>";
print_r(explode(',',$str,0));
echo "<br>";
echo "<br>";
print_r(explode(',',$str,2));
echo "<br>";
echo "<br>";
print_r(explode(',',$str,-1));
?>