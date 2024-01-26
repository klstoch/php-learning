<?php

declare(strict_types=1);

require_once __DIR__ . '/functions.php';

$num = (float) readline('Введите число: ');

for ($i = 1; $i <= $num; $i++) {
    $isSimple = numberIsSimple($i);
    if ($isSimple) {
        echo $i . ' ';
    }
}

echo PHP_EOL;
