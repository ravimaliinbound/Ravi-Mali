<?php
for($i=1;$i<=50;$i++)
{
    if($i%3==0)
    {
       if($i%5==0)
       {
        echo "FizzBuzz";
       }
       else
       {
        echo "Fizz";
       }
    }
    else if($i%5==0)
    {
        echo "Buzz";
    }
    else 
    {
        echo $i;
    }
    echo "<br>";
}
?>