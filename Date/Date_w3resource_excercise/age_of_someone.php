<?php
$birthday = new DateTime("02-12-1987");
$today = new DateTime("07-02-2025");
$diff = $birthday->diff($today);
echo "Your Age is : " . $diff->format("%y years %m Months and %d Days");
?>