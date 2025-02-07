<?php
$file = 'www.example.com/public_html/index.php';
echo "Full path is : ". $file . "<br>";
echo "File name is : ".substr(strrchr($file,"/"),1);
?>