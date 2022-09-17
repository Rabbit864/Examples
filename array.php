<?php

$fruits = ['apple', 'banana', 'orange', 'watermelon', 'melon'];

// добавление в конец массива
$fruits[] = 'beet';

// удаление первого элемента массива
unset($fruits[0]);

foreach ($fruits as $fruit) {
    echo $fruit . PHP_EOL;
}