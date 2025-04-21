<?php
interface eligibility
{
    public const AGE = 18;
    public function checkAge();
}
class checkeligibility implements eligibility
{
    public function checkAge()
    {
        if (eligibility::AGE >= 18) {
            echo "you are eligible for Vote...!";
        } else {
            echo "you are not eligible for Vote...!";
        }
    }
}
echo "Your age is ". eligibility::AGE . " so ";
$obj = new checkeligibility;
$obj->checkAge();
?>