<?php
function show($x, $y)
{
    if($x===$y)
    {
        return 0;   
    }
    return ($x>$y?1:-1);
}
$arr1=array("a"=>"Ravi","b"=>"Karan","c"=>"Rajesh");
$arr2=array("a"=>"Ravi","b"=>"Ashish","d"=>"Rajesh");
$res = array_diff_uassoc($arr1,$arr2,"show");
print_r($res); //Array ( [b] => Karan [c] => Rajesh )
// Checks both key and value but it uses a user-defined function to compare
?>