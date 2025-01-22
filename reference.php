<?php
function show(&$name)
{
    $name = "Ravi Mali";
}
$name = "Ravi";
echo "Name before calling tha show() function is : $name <br>";
show($name);
echo "Name after calling the show() function is : $name";
?>