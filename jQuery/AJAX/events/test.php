<?php
$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : '';
$surname = isset($_REQUEST['surname']) ? $_REQUEST['surname'] : '';
$city = isset($_REQUEST['city']) ? $_REQUEST['city'] : '';
$age = isset($_REQUEST['age']) ? $_REQUEST['age'] : '';
$hobbies = isset($_REQUEST['hobbies']) ? $_REQUEST['hobbies'] : '';
$hobbies_str = implode(', ', $hobbies);
echo $name . " " . $surname . " is from " . $city . ", " . $age . " years old and his hobbies are " . $hobbies_str;
?>