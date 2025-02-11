<?php
$x= 10;
echo $x. "<br>";
function show()
{
    echo $GLOBALS['x'];
    echo "<br>";
    // echo $x;   // Error when referring to a global variable without the $GLOBALS syntax
}
function display()
{
    global $x;
    echo $x;
    $x++;
    echo "<br>";
}
show();
display();
echo $x;    
?>