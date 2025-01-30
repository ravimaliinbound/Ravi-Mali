<?php 
function insertionSort(&$arr, $n)
{
    for ($i=1; $i<$n; $i++)
    {
        $temp = $arr[$i];
        for ($j=$i-1;$j >=0 && $arr[$j] > $temp;$j--)
        {
            $arr[$j + 1] = $arr[$j];
            
        }
        $arr[$j + 1] = $temp;
    }
}
$arr = array(15, 10, 12, 8, 2,7);
$n = sizeof($arr);
echo "Before Sorting : ";
for($i=0;$i<6;$i++)
{
    echo $arr[$i]. " ";
}
insertionSort($arr, $n);
echo "<br> After Sorting :  ";
for($i=0;$i<6;$i++)
{
    echo $arr[$i]. " ";
}
?> 