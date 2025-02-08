<?php
$date1 = new DateTime("02-12-2025 01:05:50");
$date2 = new DateTime("06-07-2019 09:45:52");
$diff = $date1->diff($date2);
echo $diff->days ." Total Days <br>";
echo $diff->y ." Years <br>";
echo $diff->m ." Months <br>";
echo $diff->d ." Days <br>";
echo $diff->h ." hours <br>";
echo $diff->i ." Minutes <br>";
echo $diff->s ." Seconds <br>";
?>