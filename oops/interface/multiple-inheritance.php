<?php
interface firstInterface
{
    public function show();
}
interface secondInterface
{
    public function display();
}
class All implements firstInterface, secondInterface
{
    public function show()
    {
        echo "Show() method implemented <br>";
    }
    public function display()
    {
        echo "display() method implemented <br>";
    }
    public function other()
    {
        echo "other() method of Class All called...!";
    }
}
$obj = new All;
$obj->display();
$obj->show();
$obj->other();
?>