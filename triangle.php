<?php
 
 function traingle()
 {
    $row = 5;
    for($i=1;$i<=$row;$i++)
    {
        for($j=$i;$j<$row;$j++)
        {
            echo " &nbsp;&nbsp;";
        }
        for($k=1;$k<=(2 * $i -1); $k++)
        {
            echo " *";
        }
        echo "<br>";
    }
 }
 traingle();
?>