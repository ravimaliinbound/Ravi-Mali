<?php
$cars = array("Mustang", "BMW", "AUDI", "Jaguar");
print_r($cars); // Array ( [0] => Mustang [1] => BMW [2] => AUDI [3] => Jaguar )
echo "<br>";

array_push($cars, "Fortuner", "Scorpio", "Innova");
echo "Array after adding items : <br>";
print_r($cars); // Array ( [0] => Mustang [1] => BMW [2] => AUDI [3] => Jaguar [4] => Fortuner [5] => Scorpio [6] => Innova )
?>