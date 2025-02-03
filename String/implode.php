<?php
echo "Before implode() function : &nbsp; ";
$arr = array("Ravi","Karan","Rajesh","Ashish");
print_r($arr)."<br>";
echo "<br><br>After implode() function : ";
echo implode("&nbsp;&nbsp;", $arr);
?>