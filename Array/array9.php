<?php
$monthly_tmp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$tmp_arr = explode(',', $monthly_tmp);
$length = count($tmp_arr);
$total=0;
foreach($tmp_arr as $arr)
{
    $total = $total + $arr;
}
$avg = $total/$length;
echo "Average Temperature is $avg <br>"; // Average Temperature is 69.766666666667
sort($tmp_arr);
echo "Five Lowest Temperatues are : ";
for($i=0;$i<5;$i++)
{
    echo $tmp_arr[$i]; // Five Lowest Temperatues are : 60 62 62 62 62
}
echo "<br >Five Highest Temperatures are : ";
for($i=count($tmp_arr)-5;$i<count($tmp_arr);$i++)
{
    echo $tmp_arr[$i]; // Five Highest Temperatures are : 76 7678 79 85
}
?>