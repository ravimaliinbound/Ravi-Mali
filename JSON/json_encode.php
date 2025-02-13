<?php
// Associative array to JSON
$age =  array("Vishal"=>20, "Suresh"=>23, "Ravi"=>19);
echo json_encode($age);
echo "<br>";
echo "<br>";

//Indexed array to JSON
$cars = array("Volvo", "BMW", "Mustang", "Audi");
echo json_encode($cars);
?>