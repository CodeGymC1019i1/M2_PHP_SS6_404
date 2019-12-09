<?php

include "Circle.php";
include "Comparator.php";
class CircleComparator implements Comparator
{

    public function compare($circleOne, $circleTwo)
    {
        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();
        if ($circleOne > $circleTwo) {
            return 1;
        } elseif ($circleOne < $circleTwo) {
            return -1;
        } else {
            return 0;
        }
    }
}