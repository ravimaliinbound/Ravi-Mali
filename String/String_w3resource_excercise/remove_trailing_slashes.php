<?php
$str = "The quick brown fox jumps over the lazy dog///";
echo "Before : " . $str;
echo "<br>Using str_replace() : " . str_replace('/','',$str);
echo "<br>Using rtrim() : " . rtrim($str,'/');
?>