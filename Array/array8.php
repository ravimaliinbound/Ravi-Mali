<?php
$arr = array("Sophia"=>31,"Jacob"=>41,"William"=>39,"Ramesh"=>40 );

foreach($arr as $x=>$y)
{
    echo "$x : $y ";
}
echo "<br>";

//Ascending order sort by value
asort($arr);
foreach($arr as $x=>$y)
{
    echo "  $x : $y ";
}
echo "<br>";

//Ascending order sort by Key
$arr = array("Sophia"=>31,"Jacob"=>41,"William"=>39,"Ramesh"=>40 );
ksort($arr);
foreach($arr as $x=>$y)
{
    echo "  $x : $y ";
}
echo "<br>";

// Descending order sorting by Value
$arr = array("Sophia"=>31,"Jacob"=>41,"William"=>39,"Ramesh"=>40 );
arsort($arr);
foreach($arr as $x=>$y)
{
    echo " $x : $y ";
}
echo "<br>";

//Descending order sorting by Key
$arr = array("Sophia"=>31,"Jacob"=>41,"William"=>39,"Ramesh"=>40 );
krsort($arr);
foreach($arr as $x=>$y)
{
    echo " $x : $y ";
}
?>