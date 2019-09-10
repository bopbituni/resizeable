<?php
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";
include_once "Shape.php";

$circle = new Circle("Circle", 10);
$rectangle = new Rectangle("Rectangle", 15, 20);
$square = new Square("Square", 5);
// echo "Cirlce: " . $circle->resize($circle);
// echo "<br>";
// echo "Rectangle: " . $rectangle->resize($rectangle);
// echo "<br>";
// echo "Square: " . $square->resize($square);


$shapes[0] = $circle;
$shapes[1] = $rectangle;
$shapes[2] = $square;

foreach ($shapes as $shape) {
    if ($shape == $circle) {
        echo $shape->resize($circle) . "<br>";
    }
    if ($shape == $rectangle) {
        echo $shape->resize($rectangle) . "<br>";
    }
    if ($shape == $square) {
        echo $shape->resize($square) . "<br>";
    }
}