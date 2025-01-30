<?php
$arr = array(23,4,2,456,54,34,7,78,3);
echo "Before Sorting : ";
for($i=0;$i<count($arr);$i++)
{
    echo $arr[$i] . "&nbsp;&nbsp;";
}
echo "<br> After Sorting : ";
for($i=1;$i<count($arr);$i++)
{
    $temp = $arr[$i];
    for($j=$i-1;$j>=0 && $arr[$j]>$temp;$j--)
    {
        $arr[$j+1]=$arr[$j];
    }
    $arr[$j+1]=$temp;
}
for($i=0;$i<count($arr);$i++)
{
    echo $arr[$i] . "&nbsp;&nbsp;";
}
?>