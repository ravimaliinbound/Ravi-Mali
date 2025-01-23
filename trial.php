<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern Printing</title>
</head>

<body>
    <div style="border: 1px solid; float:left; padding:10px;">
        <?php

        function first()
        {
            for ($i = 1; $i <= 5; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo " *";
                }
                echo "<br>";
            }
        }
        first();
        ?>
    </div>
    <div style="border:1px solid; float:left; margin-left:20px;padding:10px">
        <?php
            for($i=1;$i<=5;$i++)
            {
                for($j=5;$j>=$i;$j--)
                {
                    echo " *";
                }
                echo "<br>";
            }
        ?>
    </div>

    <div style="border:1px solid; float:left; margin-left:20px;padding:10px">
            <?php
                for($i=1;$i<=5;$i++)
                {
                    for($j=5;$j>=1;$j--)
                    {
                        echo " *";
                    }
                    echo "<br>";
                }
            ?>
    </div>


    <div style="border:1px solid; float:left; margin-left:20px;padding:10px">
            <?php
            $num=1;
            $x=10;
                for($i=1;$i<=4;$i++)
                {
                    for($j=1;$j<=1;$j++)
                    {       
                        if($num==11)
                        {
                            echo "$num <br>";
                        }             
                        echo $num*$num;
                        $num=$num+$x;
                        $x=$x*10;
                    }
                    echo "<br>";
                }
            ?>
    </div>

    <div style="border:1px solid; float:left; margin-left:20px;padding:10px">
            <?php
            $num=1;
            $x=10;
                for($i=1;$i<=4;$i++)
                {
                    for($j=$i;$j<4;$j++)
                    {
                        echo "&nbsp;&nbsp;";
                    }
                    for($k=1;$k<=1;$k++)
                    {       
                        if($num==11)
                        {
                            echo " &nbsp;$num <br>";
                        }             
                        echo " ". $num*$num;
                        $num=$num+$x;
                        $x=$x*10;
                    }
                    echo "<br>";
                }
            ?>
    </div>

    <div style=" float:left; ">
                <?php
                    for($i=1;$i<=4;$i++)
                    {
                        for($j=$i;$j<4;$j++)
                        {
                            echo "&nbsp;&nbsp;";
                        }
                        for($k=1;$k<=$i;$k++)
                        {
                            echo "*";
                        }
                        echo "<br>";    
                    }
                    for($i=1;$i<=3;$i++)
                    {
                        for($j=1;$j<=$i;$j++)
                        {
                            echo "&nbsp;&nbsp;";
                        }
                        for($k=3;$k>=$i;$k--)
                        {
                            echo "*";
                        }
                        echo "<br>";

                    }
                   

                   
                ?>
    </div>

    <div style ="float:left; margin-top:36px;">
<?php
 for($i=1;$i<=3;$i++)
 {
     for($j=1;$j<=10;$j++)
     {
         
         echo "*";
     }
     echo "<br>";
 }
?>
    </div>

    <div style="float:left">
        <?php
        for($i=1;$i<=4;$i++)
        {
            for($j=1;$j<=$i;$j++)
            {
                echo "*";
            }
            echo "<br>";    
        }
        for($i=1;$i<=3;$i++)
        {
            for($j=3;$j>=$i;$j--)
            {
                echo "*";
            }
            echo "<br>";
        }
        ?>
    </div>
</body>

</html> 