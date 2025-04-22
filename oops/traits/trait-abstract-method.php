<?php
trait apnaTrait
{
    abstract function myshow();

}
class apniBook
{
    use apnaTrait;
    function myshow()
    {
        echo "Hello <br>";
    }
    public function showw()
    {
        echo "showw method of apniBook Class called...!";
    }
}
$obj = new apniBook;
$obj->myshow();
$obj->showw();
?>