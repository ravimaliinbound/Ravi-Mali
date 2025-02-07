<?php
$birthday = strtotime("04-03-2025");
$today = strtotime("07-02-2025");
$diff = $birthday-$today;
echo $diff/(24*60*60) ." Days Remaining";
?>