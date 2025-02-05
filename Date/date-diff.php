<?php
$date1 = strtotime("2025-02-04");
$date2 = strtotime("2025-01-23");
$diference = $date1-$date2;
echo $diference/(60*60*24) ." Days";
?>