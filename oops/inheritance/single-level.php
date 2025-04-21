<?php
class First{
    function show(){
        echo "Show function or First Class<br>";
    }
}
class Second extends First{
    function show(){
        First::show();
        echo "Display Function of Second Class<br>";
    }
}
$obj = new Second;
$obj->show();
?>