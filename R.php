<?php
$num=6;
for($i=1;$i<=$num;$i++)
{
    for($j=1;$j<=4;$j++)
    {
        if($i==1 || $j==1 || $i==3 || $i==2 && $j==4 || $i==4 && $j==2|| $i==5 && $j==3|| $i==6 && $j==4 )
        {
            echo " *";
        }
        else 
        {
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}

?>