<?php
for($i=1;$i<=7;$i++)
{
    for($j=1;$j<=5;$j++)
    {
        if($j==1 && $i!=1 && $i!=7 || $i==1||$i==6 && $j>1 && $j<5 || $j==5 && $i==1|| $i==6)
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