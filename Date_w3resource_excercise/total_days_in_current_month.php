<?php
$date = date_create();
echo "Today's Date : ".date_format($date, "d-M-Y"). "<br>";
echo "Total Days in ". date_format($date, "F")." Month : ". date_format($date, "t");
?>