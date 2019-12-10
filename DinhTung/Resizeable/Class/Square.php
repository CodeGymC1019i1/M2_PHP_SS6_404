<?php

include_once "Rectangles.php";
include_once "Resizeable.php";
class Square extends Rectangles implements Resizeable
{
public $side;

public function __construct($name,$side)
{
    $this->name = (double)$name;
    $this->side = (double)$side;
}

public function calculateArea()
{
    return $this->side **2;
}

public function calculatePerimeter()
{
    return $this->side*4;
}

public function resize($percent)
{
    return $this->calculateArea() * (1+$percent/100);
}
}