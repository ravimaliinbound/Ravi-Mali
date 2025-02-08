<?php
echo date("d-M-Y") . "<br>";
for($i=1;$i<=6;$i++)
{
    echo date("d-M-Y", strtotime(" -$i Months")) ."<br>";
}
?>