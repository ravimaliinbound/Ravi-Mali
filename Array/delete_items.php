<?php
$fruits = array("Apple", "Banana","Orange","Mango", "Kiwi","Pineapple");
print_r($fruits);
echo "<br><br> New Array After array_splice() funtion <br>";
array_splice($fruits,1,3); //auto re-arranges index number
print_r($fruits);

echo "<br><br> New Array After unset() funtion <br>";
$fruits = array("Apple", "Banana","Orange","Mango", "Kiwi","Pineapple");
unset($fruits[1]); //Does not re-arrange index number
print_r($fruits); // Output : Array ( [0] => Apple [2] => Orange [3] => Mango [4] => Kiwi [5] => Pineapple );


echo "<br><br> New Array After array_diff() funtion <br>";
$car = array("Brand"=>"Toyota","Model"=>"Innova", "Year"=>"2021");

print_r(array_diff($car, ["Innova", 2021])); //Return a new array except given values 
// Output : Array ( [Brand] => Toyota )

echo "<br><br> New Array After array_pop() funtion <br>";
$fruits = array("Apple", "Banana","Orange","Mango", "Kiwi","Pineapple");
array_pop($fruits); //Removes the last element/item of array. Auto re-arranges index number
print_r($fruits);


echo "<br><br> New Array After array_shift() funtion <br>";
$fruits = array("Apple", "Banana","Orange","Mango", "Kiwi","Pineapple");
array_shift($fruits); //Removes the last element/item of array
print_r($fruits); //Removes the first eelmet of array. Auto re-arranges index number
?>