<?php
$name = "RAVIMALI";
$count = strlen($name);

for($i=0;$i<$count;$i++)
{
    for($j=0;$j<=$i;$j++)
    {
        echo " $name[$j] ";
    }
    echo "<br>";
}
?>