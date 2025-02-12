<?php


// include_once() checks if the same file already have included or not. If the same file already have included the same file will not be re-included.
include_once('good.php');
echo " Morning";
echo "<br>";

// include() doesn't check that the same file already have included or not
include('good.php');
include('good.php');
include('good.php'); // The same file will be included 3 times
echo " Morning";
?>