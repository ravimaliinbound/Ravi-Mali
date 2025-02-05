<?php
date_default_timezone_set('Asia/kolkata');
print_r(getdate());
echo "<br><br>";
$date = getdate(date("U"));
echo "$date[weekday], $date[month], $date[mday], $date[year]";
?>