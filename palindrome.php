<?php
            $num=1;
            $x=10;
                for($i=1;$i<=5;$i++)
                {
                    for($j=$i;$j<5;$j++)
                    {
                        echo "&nbsp;&nbsp;";
                    }
                    for($k=1;$k<=1;$k++)
                    {       
                        echo $num*$num;
                        $num = $num+$x;
                        $x=$x*10;             
                    }
                    echo "<br>";
                }
?>