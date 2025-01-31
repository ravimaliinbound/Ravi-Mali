<?php
$x = 10;
$y = 20;

function show()
{
  global $x, $y;
  echo $x . "<br>";
  $x = 30; //changing value of a global variabe inside the function
  echo $x . "<br>";
  echo $y. "<br>";
}
show();
echo $x. "<br>";
echo $y;
?>