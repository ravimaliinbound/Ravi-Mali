<?php
$date = date_create("2011-01-01");
$before= date_sub($date, date_interval_create_from_date_string("40 days"));
echo "Before 40 days : ". $before->format("Y-m-d") . "<br>";
$after  = date_add($date, date_interval_create_from_date_string("80 days"));
echo "After 40 days : ". $after->format("Y-m-d");
?>