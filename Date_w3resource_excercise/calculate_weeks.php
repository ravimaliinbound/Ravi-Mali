<?php
$date1 = new DateTime("1/1/2014");
$date2 = new DateTime("12/31/2014");
$diff = $date1->diff($date2);
echo "Total Days : " . $diff->days+1;
echo "<br> Total Weeks : " . $diff->days/7;
?>