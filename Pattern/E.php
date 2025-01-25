<?php

$num=7;
for($i=1;$i<=$num;$i++)
{
    for($j=1;$j<=$num;$j++)
    {
        if($i==1 || $i==4 ||$i==$num ||$j==1)
        {
            echo "*";
        }
        else 
        {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}

?>