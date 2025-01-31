<?php
function show()
{
    static $a = 10;
    echo $a . "<br>";
    $a++;
}
show();
show();
show();
?>