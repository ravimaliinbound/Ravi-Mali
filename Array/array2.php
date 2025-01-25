<?php
$color = array("White", "Green", "Red");
foreach($color as $data)
{
    echo $data . ",  ";
}
sort($color);
echo "<br>";
echo "<ul>";
foreach($color as $data)
{
    echo "<li>". $data . "</li>";
}
echo "</ul>";
?>