<?php
$file = fopen("print.php","w");
echo "Total Character Written In File : ";
echo fprintf($file, "Hello My Name Is Ravi And I'm Written By fprintf () ");
fclose($file);
?>