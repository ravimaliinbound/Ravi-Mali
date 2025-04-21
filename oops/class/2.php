<?php
class Subject
{
    public $name = "Hindi";
    public function getName(){
        echo $this->name . "<br>";
    }
    public function setName($name){
        $this->name = $name;
    }
}
$obj1 = new Subject();
$obj2 = new Subject();
$obj1->getName(); //Hindi
$obj1->setName("Enlgish");
$obj1->getName(); //English
$obj2->getName(); //Hindi

$obj2->getName(); //Hindi
$obj2->setName("Gujrati");
$obj2->getName(); //Gujrati
$obj1->getName(); //English
?>