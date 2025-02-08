<?php
$date = date_create();
$yesterday = date_sub($date, date_interval_create_from_date_string("1 day"));
echo $yesterday->format("d-M-Y");
?>