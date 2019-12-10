<?php
include_once "Circle.php";
include_once "Rectangles.php";
include_once "Square.php";

$shapes[0] = new Circle("Circle", 4);
$shapes[1] = new Rectangles("Rectangles", 2, 4);
$shapes[2] = new Square("Square", 3);
foreach ($shapes as $shape)
    echo $shape->name." with area before: ".$shape->calculateArea()." and after: "
        .$shape->resize(mt_rand(0,100))."<br>";
