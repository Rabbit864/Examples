<?php

function sum(int $value1, int $value2): int
{
    return $value1 + $value2;
}


/**
 * PHP_EOL - перенос строки
 */
echo sum(1, 3) . PHP_EOL;
echo sum(4, 5) . PHP_EOL;
echo sum(5, -5) . PHP_EOL;
