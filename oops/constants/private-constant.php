<?php
class A
{
    private const age = 18;
    const PI = 22/7;
    function show()
    {
        echo "Age is : " . A::age;
    }
}
$obj = new A;
echo "Value of PI is : ". A::PI ."<br>";
// echo  A::age; // Cannot access private constant A::age
$obj->show();
?>