<?php
class A{
    public function show(){
        echo "show() method of Class A <br>";
    }
}
class B extends A{
    public function display(){
        $this->show();
        echo "display() method of Class B <br>";
    }
}
class C extends B{
    public function fruits(){
        $this->display();
        echo "fruits() method of Class C <br>";
    }
}
$obj = new C;
$obj->fruits();
?>