<?php
$today = date("d-F-Y");
echo $today."<br>";
echo date("d-F-Y", strtotime( '-1 month'));
?>