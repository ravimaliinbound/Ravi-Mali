<?php
$str = "hello world!, it's a beautiful day.!";
$str1 = "Hello World!";
echo $str1;
echo "<br>Transform all letters to uppercase : " .strtoupper($str);
echo "<br>Transform all letters to lowercase : " .strtolower($str1);
echo "<br>Make string's first character to uppercase : " . ucfirst($str);
echo "<br>Make string's first character of all the words uppercase : " . ucwords($str);
?>