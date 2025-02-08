<?php
$str = "Twinkle, twinkle, little star,<br>How I wonder what you are.<br>Up above the world so high,<br>Like a diamond in the sky.";
echo $str ."<br><br>";
var_dump(explode("<br>",$str));
?>