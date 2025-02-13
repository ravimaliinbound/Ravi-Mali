<?php

// same as inclue() and include_once() but only difference is include gives warning and require gives fatal error and terminates the script
require_once('good.php');
echo " Morning";
echo "<br>";

require('good.php');
require('good.php');
echo " Morning";
?>