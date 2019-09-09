<?php
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";

$circle = new Circle(10);
$rectangle = new Rectangle(10, 20);
$square = new Square(5,5);
 echo "Cirlce: " . $circle->resize();
 echo "<br>";
 echo "Rectangle: " . $rectangle->resize();
 echo "<br>";
 echo "Square: " . $square->resize();
