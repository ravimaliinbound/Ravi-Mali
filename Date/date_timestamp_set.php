<?php
$date = date_create();
date_timestamp_set($date,1738700100);
echo date_format($date, "U = d-M-Y h:i:s"); // 1738700100 = 04-Feb-2025 09:15:00
?>