<?php
echo "<h1>Indexed Array</h1>";
$index = array("Ravi", 13, "Mali");
print_r($index);
echo "<br>";
echo "Printing array using Foreach Loop : ";
foreach($index as $data)
{
    echo $data . " ";
}
echo "<br>";


echo "<h1>Associative Array</h1>";
$associate = array("name"=>"Ravi", "age"=>21, "nationality"=>"Indian");
print_r($associate);
echo "<br>";
echo "Printing array using Foreach Loop : ";
foreach($associate as $x=>$y)
{
    echo "$x : $y &nbsp;";
}
echo "<br>";


echo "<h1>Multidimensional Array</h1>";
$multi = array(array("Ford","Mustang","Orange",2025),array("Toyota","Fortuner", "White", 2022),array("Tata", "Nexon", "Black",2023),array("Mahindra", "Scorpio","Black", 2023));
print_r($multi);

?>