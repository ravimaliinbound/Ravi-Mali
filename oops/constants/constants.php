<?php
class A
{
    const age = 18;
    public function show($age)
    {
        if ($age >= A::age) {
            echo "You are eligible for Vote...!";
        } else {
            echo "You are not eligible for Vote...!";
        }
    }
}
$obj = new A;
echo A::age . '<br>'; //18  //No need $ sign   // No need object creation to access constants bcoz they are statixc by default
$obj->show(21); //You are eligible for Vote...!
?>