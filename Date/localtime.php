<?php
date_default_timezone_set('Asia/Kolkata');
print_r(localtime());
echo "<br>";
print_r(localtime(time(), true));
?>