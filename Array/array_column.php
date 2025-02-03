<?php

$arr = [
    [
        'id' => 1,
        'name' => 'Ravi',
        'age' => 13,
    ],
    [
        'id' => 2,
        'name' => 'Kiran',
        'age' => 18,
    ],
    [
        'id' => 3,
        'name' => 'Vishal',
        'age' => 21,
    ],
    [
        'id' => 4,
        'name' => 'Karan',
        'age' => 10,
    ]
];
 
$names = array_column($arr, 'name');
print_r($names);

?>