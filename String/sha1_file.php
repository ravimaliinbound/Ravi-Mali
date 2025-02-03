<?php
$file = "print.php";
$file_sha1 = sha1_file($file);
echo "SHA1 Hash of &nbsp;\"$file\" is : $file_sha1";
?>