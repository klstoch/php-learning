<?php

declare(strict_types=1);

require_once __DIR__ . '/functions.php';

while (true) {
    $num = (float) readline('Введите число: ');


    if (numberIsSimple($num)) {
        echo $num . ' - простое число';
    } else {
        echo $num . ' - не простое число';
    }

    echo PHP_EOL;
}
