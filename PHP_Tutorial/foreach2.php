<?php

class Cars 
{
    public $name;
    public $color;
    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
}
$obj = new Cars("Mustang", "Orange");
foreach($obj as $x => $y)
{
    echo "$x =>$y <br>";
}
?>
