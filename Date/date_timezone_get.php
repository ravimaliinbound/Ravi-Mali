<?php
$date = date_create();
$tz = date_timezone_get($date);
echo timezone_name_get($tz);
?>