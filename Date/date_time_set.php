<?php
$date = date_create("2025-02-04");
date_time_set($date,12,14);
echo date_format($date,"d-M-Y h:i:s");
echo "<br>";
date_time_set($date,12,40,22);
echo date_format($date,"d-M-Y h:i-s");
?>