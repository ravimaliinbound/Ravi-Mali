<?php
$str = "The quick brown fox jumps over the lazy dog";
echo $str ."<br><br>";

 if(strpos($str, "jumps")== true)
 {
    echo "String is present in the following string.";
 }
 else
 {
    echo "String is not present in the following string";
 }
?>