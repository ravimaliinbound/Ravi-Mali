<?php
$str = "ravi@example.com";
echo "Before : " . $str ."<br>";
$new=  ltrim($str,$str[0]);
$new = ltrim($new,$new[0]);
$new = ltrim($new,$new[0]);
$new = ltrim($new,$new[0]);
$new = ltrim($new,$new[0]);
echo "After : ".$new;

?>