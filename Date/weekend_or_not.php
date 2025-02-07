<?php
$date = "08-02-2025";
$date2 = strtotime($date);
$date3 = date("l",$date2);
$date4 = strtolower($date3);
if($date4 == 'saturday' || $date4 == 'sunday')
{
    echo $date3. " is Weekend.";
}
else
{
    echo $date3 ." is not Weekend.";
}
?>