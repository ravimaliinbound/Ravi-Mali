<?php
for($i=1;$i<=7;$i++)
{
    for($j=1;$j<=5;$j++)
    {
        if($j==1 || $j==5 && $i!=1 || $i==1 ||$i==4 ||$i==7)
        {
           if($i==1 && $j==5 || $i==7 && $j==5)
           {
             echo "&nbsp;&nbsp;";
           }
           else
           {
            echo " *";
           }
        }
    else
    echo "&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
}
?>              