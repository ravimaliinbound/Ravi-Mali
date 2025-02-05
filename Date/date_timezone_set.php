<?php
$date = date_create("02-04-2025", timezone_open('Asia/Kolkata'));
$tz = date_timezone_get($date);
echo timezone_name_get($tz);
?>