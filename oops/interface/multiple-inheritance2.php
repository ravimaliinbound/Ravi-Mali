<?php
class marks
{
    public $hindi, $english;
    public function marks($hindi, $english)
    {
        $this->hindi = $hindi;
        $this->english = $english;
        echo "Marks of Hindi are : " . $hindi;
        echo "<br>Marks of English are : " . $english;
    }
}
interface percentInterface
{
    public function percent();
}
class Student extends marks implements percentInterface
{
    public function percent()
    {
        echo "<br>Percentage are : " . $this->hindi + $this->english / 200;
    }
}
$obj = new Student();
$obj->marks(80, 85);
$obj->percent();
?>