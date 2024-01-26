<?php
declare(strict_types=1);
require_once __DIR__ . '/Shape.php';

class Triangle extends Shape
{
    public function __construct(
        private readonly int $side1,
        private readonly int $side2,
        private readonly int $height
    )
    {
    }

    public function Perimeter(): float
    {
        return $this->side1 + $this->side2 + $this->height;
    }

    public function Square(): float
    {
        return ($this->height * $this->side1) / 2;
    }
}
