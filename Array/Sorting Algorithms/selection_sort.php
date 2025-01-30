<?php
$arr = array(23,4,56,67,5,8 );
for($k=0;$k<6;$k++)
{
    $min = $arr[$k];
    for($i=$k+1;$i<6;$i++)
    {
        if($min>$arr[$i])
        {
            $min=$arr[$i];
            $s=$i;
        }
    }
        $temp=$arr[$k];
        $arr[$k]=$min;
        $arr[$s]=$temp;
}
for($i=0;$i<count($arr);$i++)
{
    echo $arr[$i],"&nbsp;&nbsp";
}
?>