<?php
$num=5;
for($i=1;$i<=$num;$i++)
{
    for($j=1;$j<=$num;$j++)
    {
       if( $i==1 || $i==$num || $j==1 || $j==$num)
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