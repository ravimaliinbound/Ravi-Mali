<?php
$date1 = new DateTime("02-04-2025");
$date2 = new DateTime("01-05-2024");
$diff = date_diff($date1,$date2);
echo "Difference between both dates is : ". $diff->format("%y Years %m Months %d Days" );
?>