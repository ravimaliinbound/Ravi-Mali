<?php
$date1 = date_create("2025-01-25");
$date2 = date_create("2027-05-04");
$diff = date_diff($date1,$date2);
echo $diff->format('%R%y Years %m Months %d Days'); // Positive : +2 Years 3 Months 9 Days
echo "<br>";
$date3 = date_create("2025-01-25");
$date4 = date_create("2022-05-04");
$diff = date_diff($date3,$date4);
echo $diff->format('%R%y Years %m Months %d Days'); // Negative : -2 Years 8 Months 21 Days
?>