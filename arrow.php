<?php
for ($i = 1; $i <= 4; $i++) 
{
    for ($j = $i; $j < 4; $j++) 
    {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++)
    {
        echo "*";
    }
    echo "<br>";
}
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) 
    {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 3; $k >= $i; $k--)
    {
        echo "*";
    }
    echo "<br>";
}
for($i=1;$i<=3;$i++)
{
    for($j=1;$j<=8;$j++)
    {
        
        echo "*";
    }
    echo "<br>";
}

for($i=1;$i<=4;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        echo "*";
    }
    echo "<br>";    
}
for($i=1;$i<=3;$i++)
{
    for($j=3;$j>=$i;$j--)
    {
        echo "*";
    }
    echo "<br>";
}
