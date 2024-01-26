<?php
declare(strict_types=1);

require_once __DIR__ . '/Rectangle.php';
require_once __DIR__ . '/Shape.php';
require_once __DIR__ . '/Triangle.php';
require_once __DIR__ . '/Circle.php';

while (true) {
    $shapeName = mb_strtolower(readline('Выбери прямоугольник, круг или треугольник: '));

    switch ($shapeName) {
        case 'прямоугольник':
            $shape = new Rectangle(
                (int)readline('Введи длину:'),
                (int)readline('Введи ширину: '),
            );
            break;
        case 'круг':
            $shape = new Circle(
                (int)readline('Введи радиус: '),
            );
            break;
        case 'треугольник':
            $shape = new Triangle(
                (int)readline('Введи первую сторону:'),
                (int)readline('Введи вторую сторону:'),
                (int)readline('Введи высоту: '),
            );
            break;
        default:
            echo 'Такой фигуры нет';
            exit();
    }
    echo $shape->Square().PHP_EOL;
    echo $shape->Perimeter().PHP_EOL;
}







