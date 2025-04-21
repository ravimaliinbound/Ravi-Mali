<?php
class Fruits
{
    public $name = 'Orange';
    public function show(){
        echo "My favourite fruit is : ". $this->name;
    }
}
$obj = new Fruits;
$obj->show();
?>