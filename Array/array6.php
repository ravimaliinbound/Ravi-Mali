<?php
$json_arr  = '{"Title": "The Cuckoos Calling", "Author": "Robert Galbraith", "Detail": {"Publisher":"Little Brown" }}';
print_r($json_arr);
echo "<br>";
$data_arr = json_decode($json_arr);
print_r($data_arr);
?>