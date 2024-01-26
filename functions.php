<?php

declare(strict_types=1);

function numberIsSimple(float $number): bool
{
    if ($number <=1) {
        return false;
    }

    $delitels = 0;
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            $delitels++;
        }
    }

    return $delitels === 1;
}