<?php
function show($arr)
{
    return "$arr*$arr =" .$arr*$arr;
}
$arr = array(1,2,3,4,5);
print_r(array_map("show", $arr)); //Array ( [0] => 1*1 =1 [1] => 2*2 =4 [2] => 3*3 =9 [3] => 4*4 =16 [4] => 5*5 =25 )
echo "<br>";

function show1($arr1, $arr2)
{
    if($arr1==$arr2)
    {
        return  "Same";
    }
    else 
    {
        return "Different";
    }
}
$arr1 = array("name"=>"Ravi", "age"=>21);
$arr2 = array("name"=>"Karan", "age"=>21);
print_r(array_map("show1", $arr1,$arr2)); // Array ( [0] => Different [1] => Same )
?>