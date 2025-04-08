<?php
$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : '';
$age = isset($_REQUEST['age']) ? $_REQUEST['age'] : '';
echo $name . " is ". $age . " years old.";
?>