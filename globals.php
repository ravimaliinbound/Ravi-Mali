<?php
$a = 10;
$b = 20;

 function show()
 {
    echo $GLOBALS['a'] . "<br>";
    echo $GLOBALS['b'] . "<br>";
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
    echo $GLOBALS['b'] . "<br>";
 }
 show();
 echo $b;
?>