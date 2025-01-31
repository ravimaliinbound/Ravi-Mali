<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table  border="1" width="270px;" cellspacing="0" style="margin-top: -280px;"> 
    <?php
        for($i=1;$i<=8;$i++)
        {
            echo "<tr>";
                for($j=1;$j<=8;$j++)
                {
                    $total=$i+$j;
                    if($total%2==0)
                    {
                        echo "<td>";
                        echo "<div style='height:30px; width:30px; background-color:white'> </div>";
                        echo "</td>";
                    }
                    else
                    {
                        echo "<td>";
                        echo "<div style='height:30px; width:30px; background-color:black'> </div>";
                        echo "</td>";
                    }
                }
            echo "</br>";
                echo "<br>";
        }
    ?>
    </table>
</body>
</html>