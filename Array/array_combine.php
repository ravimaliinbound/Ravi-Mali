<?php
$a = array('Red', 'Green', 'Yellow');
$b = array('Apple', 'Grapes', 'Banana');
print_r(array_combine($a,$b)); // Array ( [Red] => Apple [Green] => Grapes [Yellow] => Banana )
echo "<br>";    
$a = array('Red', 'Green', 'Green'); //if two keys are tha same, the second one prevails
$b = array('Apple', 'Grapes', 'Banana');
print_r(array_combine($a,$b));  //Array ( [Red] => Apple [Green] => Banana ) 
?>