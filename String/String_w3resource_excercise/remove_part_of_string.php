<?php
$str = "The quick brown fox jumps over the lazy dog.";
echo "Before : ". $str;
echo "<br>After : ". str_replace("fox", '',$str);
?>