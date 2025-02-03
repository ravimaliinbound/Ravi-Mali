<?php
function odd($var)
{
  return ($var & 1);
}
function even($var)
{
  return !($var & 1);
}
$a1 = array(1, 3, 2, 3, 4);
echo "Odd : <br>";
print_r(array_filter($a1, "odd")); //Array ( [0] => 1 [1] => 3 [3] => 3 )
echo "<br >Even : <br>";
print_r(array_filter($a1, "even")); //Array ( [2] => 2 [4] => 4 )
