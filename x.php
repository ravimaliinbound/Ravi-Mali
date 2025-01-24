<?php
$num =5;
for($i=1;$i<=$num;$i++)
{
    for($j=1;$j<=$num;$j++)
    {
        if($i==$j)
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
echo "<br>";

for($i=1;$i<=$num;$i++)
{
    for($j=1;$j<=$num;$j++)
    {
        if($i==$j || $i+$j==$num+1)
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