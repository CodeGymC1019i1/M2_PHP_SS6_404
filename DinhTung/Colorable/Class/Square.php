<?php
include_once "Rectangle.php";
include_once "Colorable.php";

class Square extends Rectangle implements Colorable
{

    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }

    public function howToCoLor()
    {
        return "Color all four sides!";
    }

    public function getClassName()
    {
        return __CLASS__;
    }
}