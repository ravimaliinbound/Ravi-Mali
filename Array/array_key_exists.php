<?php
$arr = array("name"=>"Ravi", "age"=>21, 13);
if(array_key_exists("name", $arr))
{
    echo "The 'name' Key exists in array <br>"; //The 'name' Key exists in array
}
else
{
    echo "The 'name' key does not exists in array <br>";
}

// We can also do like this
$a =array_key_exists("gender", $arr);
if($a==1)
{
    echo "The 'gender' Key exists in array";
}
else
{
    echo "The 'gender' key does not exists in array"; //The 'gender' key does not exists in array
}
?>