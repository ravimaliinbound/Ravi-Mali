<?php
$date = date_create("2025-02-04");
$date2= date_create("2025-02-04");
date_modify($date, "+10 days");
echo date_format($date, "d-M-Y");   
echo "<br>";
date_modify($date2,"-10 days");
echo date_format($date2,"d-M-Y")
?>