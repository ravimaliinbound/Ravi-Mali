<?php
$arr=array(12,3,45,67,8,5,2);
for($i=0;$i<count($arr);$i++)
{
    $min=$arr[$i];
    for($j=$i-1;$j>=0 && $arr[$j]>$min;$j--)
    {
        $arr[$j+1] = $arr[$j];
    }
    $arr[$j+1]=$min;
}
for($i=0;$i<count($arr);$i++)
{
    echo $arr[$i] . "&nbsp;&nbsp;";
}
?>