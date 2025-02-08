<?php
$str = "The quick brown fox jumps over the lazy dog";
echo "Full String : ". $str . "<br>";
$arr = explode(' ', $str);
echo "Starting five words : ";
for($i=0;$i<5;$i++)
{
    echo $arr[$i] . " " ;
}
echo "<br>" . implode( ' ', array_slice(explode(' ',$str),0,5   ));
?>