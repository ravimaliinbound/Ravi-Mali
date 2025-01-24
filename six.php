<?php
for($i=0;$i<100;$i++)
{
   if($i<10)
   {
    echo "0$i, ";
   }
   else
   {
    echo "$i, ";
   }
}

echo "<br>";
echo "<br>";

for($i=0;$i<10;$i++)
{
    for($j=0;$j<10;$j++)
    {
            echo $i.$j .",";
    }
    echo "<br>";
}
?>