<?php
namespace myName;
// __CLASS__
class Fruits {
    public function myValue(){
      return __CLASS__ ."<br>"; // Output Fruits
    }
  }
  $kiwi = new Fruits();
  echo $kiwi->myValue();

  //__DIR__
echo __DIR__ ."<br>";   //Output : C:\xampp\htdocs\Ravi_Kumar

//__FILE__
echo __FILE__ ."<br>"; //Output C:\xampp\htdocs\Ravi_Kumar\__dir__.php

//__FUNCTION__
function myValue(){
    return __FUNCTION__ ."<br>"; //Output myValue
  }
  echo myValue();

//__LINE__
echo __LINE__ ."<br>"; //Output : 25

//__METHOD__
// class Fruits {
//     public function myValue(){
//       return __METHOD__; //Fruit::myValue   
//     }
//   }
//   $kiwi = new Fruits();
//   echo $kiwi->myValue();

//__NAMESPACE__
function show()
{
    return __NAMESPACE__ . "<br>";
}
echo show(); //Output : myName

?>