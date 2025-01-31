<?php

function show()
{
    echo "Hello <br>";
}

$arr = array(10, 20, "Ravi Mali", 13, show()); //Calling show() function by the array element.
foreach($arr as $a)
{
    echo $a . "<br>";
}

?>