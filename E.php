<?php

$num=5;
for($i=1;$i<=$num;$i++)
{
    for($j=1;$j<=$num;$j++)
    {
        if($i==1 || $i==3 ||$i==$num ||$j==1)
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