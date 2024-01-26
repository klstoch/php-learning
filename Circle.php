<?php
declare(strict_types=1);
require_once __DIR__ . '/Shape.php';

class Circle extends Shape
{
    public function __construct(
        private readonly int $radius
    )
    {
    }

    public function Perimeter(): float
    {
        return $this->radius * 2 * M_PI;
    }

    public function Square(): float
    {
        return $this->radius ** 2 * M_PI;
    }
}
