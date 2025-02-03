<?php
define("NAME", "Ravi Kumar Mali ! <br>");
echo NAME;
const car ="Mustang <br>";
echo car;
define("cars", ["Tata","BMW","Toyota"]);
  echo cars[0] . "<br>";

define("GREETING", "Good Morning!");

function myTest() {
  echo GREETING; //We can access/user constant inside a functon, even if it is defined outside the function
}
myTest();
?> 