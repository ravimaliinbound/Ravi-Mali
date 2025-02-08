<?php
$date = date_create();
echo "Current Date : " . date_format($date, "d-M-Y"). "<br>";
date_add( $date, date_interval_create_from_date_string(" +1 Month"));
echo "After 1 Month : ".date_format($date, "d-M-Y");
?>