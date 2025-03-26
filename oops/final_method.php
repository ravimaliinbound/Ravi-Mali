<?php
class First
{
    // final public function show() 
    // {
    //     echo "final show() function of First class";
    // }
}
class Second extends First
{
    public function show()// It will generate an error here if I don't comment the above code because we can't override a final method
    {
        echo "show() function of Second class";        
    }
}
$obj = new Second();
$obj->show();
?>