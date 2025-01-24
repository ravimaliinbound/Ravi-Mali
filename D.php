<?php
for($i=1;$i<=7;$i++)
{
    for($j=1;$j<=5;$j++)
    {
        if($j==1 || $j==5 && $i!=1 || $i==1  ||$i==7)
        {
            if($i==2 && $j==2)
            {
                echo "&nbsp;";
            }                 
            else
            {
                echo " *";
            }   
        }
        else 
        {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
?>              