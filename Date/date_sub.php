<?php
$date = date_create("2025-02-04");
date_sub($date,date_interval_create_from_date_string("+40 days"));
echo date_format($date,"d-M-Y");
?>