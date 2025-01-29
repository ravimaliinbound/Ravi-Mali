<?php 
function insertionSort(&$arr, $n)
{
    for ($i=1; $i<$n; $i++)
    {
        $key = $arr[$i];
        for ($j=$i-1;$j >=0 && $arr[$j] > $key;$j--)
        {
            $arr[$j + 1] = $arr[$j];
            
        }
        $arr[$j + 1] = $key;
    }
}
$arr = array(15, 10, 12, 8, 2,7);
$n = sizeof($arr);
insertionSort($arr, $n);
print_r($arr);
echo "<br>";
for($i=0;$i<6;$i++)
{
    echo $arr[$i]. " ";
}
?>