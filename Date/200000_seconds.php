<?php
$date1 = new DateTime("@0");
$date2 = new DateTime("@200000");
$diff = $date1->diff($date2);
echo $diff->days ." Days <br>";
echo $diff->h ." Hours <br>";
echo $diff->i ." Minutes <br>";
echo $diff->s ." Seconds <br>";
?>