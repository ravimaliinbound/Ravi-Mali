<?php
//Indexed array
echo "<p>=> Indexed array</p>";
$json = '["Karan", "Ravi", "Yogendra"]';
var_dump(json_decode($json));
echo "<br><br>";

//  returns Associative array when we set the second parameter true.
echo "<p>=> Returns Associative array when we set the second parameter true</p>";

$json = '{"Karan":21, "Ravi":20, "Yogendra":19}';
var_dump(json_decode($json, true));
echo "<br><br>";

//  Returns Object when we don't set the second parameter true.
echo "<p>=> Returns Object when we don't set the second parameter true</p>";
$json = '{"Karan":21, "Ravi":20, "Yogendra":19}';
var_dump(json_decode($json));
echo "<br><br>";

//Accessing values of PHP Object
echo "<p>=> Accessing values of PHP Object</p>";
$obj = json_decode($json);
echo $obj->Karan . "<br>";
echo $obj->Ravi . "<br>";
echo $obj->Yogendra . "<br><br>";

//accessing values from associative array
echo "<p>=> Accessing values from associative array</p>";
$obj = json_decode($json,true);
echo $obj['Karan']."<br>";
echo $obj['Ravi']."<br>";
echo $obj['Yogendra'];
echo "<br><br>";

//Looping through the values of object
echo "<p>=> Looping through the values of object</p>";
$obj = json_decode($json);
foreach($obj as $key=>$value)
{
    echo $key." => ". $value. "<br>";
}
echo "<br><br>";

//Looping through the values of an Associative array
echo "<p>=> Looping through the values of an Associative array</p>";
$obj = json_decode($json, true);
foreach($obj as $key=>$value)
{
    echo $key." => ". $value. "<br>";
}
?>
