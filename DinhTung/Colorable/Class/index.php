<?php
include_once "Circle.php";
include_once "Cylinder.php";
include_once "Rectangle.php";
include_once "Square.php";
include_once "ClassName.php";

$shapes[0] = new Circle("circle1", 2);
$shapes[1] = new Cylinder("cylinder1", 2, 4);
$shapes[2] = new Rectangle("rectangle1",4,2);
$shapes[3] = new Square("square1",2);

foreach (get_declared_classes() as $className) {
    if (in_array('Colorable', class_implements($className))) {
        $classUseInterfaceColorable = $className;
    }
}
foreach ($shapes as $shape)
    if($classUseInterfaceColorable == $shape->getClassName()) {
        echo $shape->howtoColor();
    }
    else {
        echo $shape->name." ".$shape->calculateArea()."<br>";
    }