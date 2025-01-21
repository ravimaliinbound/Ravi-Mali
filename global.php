<!DOCTYPE html>
<html>
<body>

<?php
$x = 5; // global scope
 
function myTest() {
  global $x;
  echo "<p>Variable x inside function is: $x</p>";
  echo $GLOBALS['x'];
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>
