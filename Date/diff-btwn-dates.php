<?php
$date1 = new DateTime("21-04-2004");
$date2 = new DateTime("04-02-2025");
$diff = $date1->diff($date2);
echo "I am : ". $diff->format('%y Years %m Months %d Days') ." Old";
?>