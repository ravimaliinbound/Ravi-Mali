<?php

$arr = array("name"=>"Ravi", "age"=>"21","state"=>"Rajasthan");
echo $arr['name'] . "<br>";
echo $arr['age'] . "<br>";
echo $arr['state'] . "<br>";


$arr['name'] = "Ravi Mali"; //Changing value 

foreach($arr as $a)
{
    echo $a ."<br>";
}

?>  