<?php

include_once "Resizeable.php";
include_once "Shape.php";
class Rectangles extends Shape implements Resizeable
{
public $width;
public $height;

public function __construct($name, $width,$height)
{
    parent::__construct($name);
    $this->width = (double)$width;
    $this->height = (double)$height;
}

public function calculateArea(){
    return $this->width * $this->height;
}

public function calculatePerimeter(){
    return ($this->width + $this->height)*2;
}

    public function resize($percent)
    {
        return  $this->calculateArea() * (1 + $percent/100);
    }
}