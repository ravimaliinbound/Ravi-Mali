<?php
$email = 'ravi@example.com';
echo "Mail : ". $email . "<br>";
echo "User name : ". strstr($email, "@", true);
?>