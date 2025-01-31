<?php
$name = "Hello World ! Hey..";
$count = strlen($name);
$flag=0;
for($i=0;$i<$count;$i++)
{
    if($name[$i]=='H')
    {
        $flag++;
    }
}
echo $flag;
//count of 'H' is 2
?>