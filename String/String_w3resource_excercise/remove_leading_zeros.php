<?php
$str = '000547023.2400';
echo "String : ". $str;
echo "<br> Removing 0's from entire string : ". str_replace( '0', '',$str);
echo "<br> Removing 0's from left side of string : ". ltrim($str,'0');
echo "<br> Removing 0's from right side of string : ". rtrim($str,'0');
echo "<br> Removing 0's from both sides of string : ". trim($str,'0');
?>