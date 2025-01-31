<?php

$num=7;
for($i=1;$i<=$num;$i++)
{
    for($j=1;$j<=5;$j++)
    {
        if($i==1 || $i==4 ||$j==1)
        {
            echo " *";
        }
        else 
        {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}

?>