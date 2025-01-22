<?php

declare(strict_types=1);

function sum(int $a, int $b)
{
    $sum = $a + $b;
    return $sum;
}
echo sum(5,"10"); //It will generate an error becaue strict is enabled.
?>