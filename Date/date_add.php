<?php
date_default_timezone_set('Asia/Kolkata');
$date = date_create("2025-02-04 04:29:00 PM");
date_add($date, date_interval_create_from_date_string("2 days 4 months 1 year 3 hours 3 minutes 30 seconds"));
echo date_format($date, "d-M-Y  h:i:s:A");
// Add Some days, months, years, hours, minutes and seconds to a date
?>