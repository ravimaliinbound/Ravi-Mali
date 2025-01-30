<?php
echo "<h2>Bubble Sort</h2>";
$arr=array(12,1,34,56,43,21,23);
echo "Before Sorting : ";
for($i=0;$i<7;$i++)
{
    echo $arr[$i] ."&nbsp;&nbsp";
}
for($k=0;$k<6;$k++)
{
    for($i=0;$i<6;$i++)
    {
        if($arr[$i]>$arr[$i+1])
        {
            $temp=$arr[$i];
            $arr[$i]=$arr[$i+1];
            $arr[$i+1]=$temp;
        }
    }
}
echo "<br> After Sorting : ";
for($i=0;$i<7;$i++)
{
    echo $arr[$i]. "&nbsp;&nbsp;";
}
?>