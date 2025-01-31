<?php
 
 $age = array("Ravi"=>21, "Karan"=>22,"Rajesh"=>20);
 foreach($age as $a)
 {
    echo $a . "<br>";
 }

 $age = array("Ravi"=>21, "Karan"=>22,"Rajesh"=>20);
 foreach($age as $a => $b )
 {
    echo "$a : $b <br>";
 }

?>