<?php

$arr = array("Name"=>"Ravi", "Age"=>"21","State"=>"Rajasthan");
echo $arr['Name'] . "<br>";
echo $arr['Age'] . "<br>";
echo $arr['State'] . "<br>";


$arr['Name'] = "Ravi Mali"; //Changing value 

foreach($arr as $a=>$b)
{
    echo $a ." : " .$b .", ";
}

?>  