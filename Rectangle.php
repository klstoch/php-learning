<?php
declare(strict_types=1);
require_once __DIR__ . '/Shape.php';

class Rectangle extends Shape
{
    public function __construct(
        private readonly int $length,
        private readonly int $width
    )
    {
    }

    public function Perimeter(): float
    {
        return ($this->length + $this->width) * 2;
    }

    public function Square(): float
    {
        return $this->width * $this->length;
    }
}










