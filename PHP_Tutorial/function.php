<?php
 
 function show($name, $age)
 {
    echo "Your Name is $name <br>";
    $age = 20; //Changing value of age will not affect to the value of actual variable.
    echo "Your Age is $age <br>";
 }
 $age = 18;
 show("Ravi", $age);
 echo $age ."<br>"; //Output : 18 


 function display($name, $year)
 {
    echo "Hello $name Your were born in $year <br>";
 }
 display("Ravi Mali","2004");

 function name($name = "Unknown")
 {
    echo "Hello Your Name Is \"$name\" <br>";
 }
 name("Kiran");
 name("Ravi");
 name();
?>