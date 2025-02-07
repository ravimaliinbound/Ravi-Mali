<?php
for($i=0;$i<=3;$i++)
{
   echo date("d-M-Y", strtotime(" -$i Months"))."<br>";
}
?>