<?php
$str = "\"\ 1+2/3*2:2-3/4*3";
echo "Before : ". $str;
echo "<br>After : " . str_replace(str_split('\ "/+/*:-/*'),' ',$str);
?>