<?php
$arr = array(2,34,23,1,0,56,7,67);
$min=$arr[0];
$i=0;
for($i0=0;$i<count($arr);$i++)
{
    if($arr[$i]<$min && $arr[$i]!=0)
    {
        $min = $arr[$i];
    }
}
echo "The Lowest Integer That Is Not 0 Is : $min";
?>