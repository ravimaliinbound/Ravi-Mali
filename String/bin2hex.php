<?php
$str = bin2hex("Ravi Mali");
echo $str;
echo "<br>";
echo pack("H*", $str);
?>