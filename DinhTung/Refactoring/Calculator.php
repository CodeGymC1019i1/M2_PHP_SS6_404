<?php

//Doi ten bien
//class Calculator
//{
//public function caculate($firstOperand, $secondOperand, $operator){
//    switch ($operator){
//        case'+':
//            return $firstOperand +$secondOperand;
//        case'-':
//            return $firstOperand -$secondOperand;
//        case'*':
//            return $firstOperand *$secondOperand;
//        case':':
//            if ($firstOperand !=0){
//                return $firstOperand /$secondOperand;
//            }else{
//                echo "Can not divide by 0";
//                break;
//            }
//        default:
//            echo "Unsupported operation";
//    }
//}
//}



// Doi ten hang
const ADDITION = "+";
const SUBTRACTION = "-";
const MULTIPLICATION = "*";
const DIVISION = "/";

class Calculator
{
    public function calculate($firstOperand, $secondOperand, $operator){
        switch ($operator){
            case ADDITION:
                return $firstOperand +$secondOperand;
            case SUBTRACTION:
                return $firstOperand +$secondOperand;
            case MULTIPLICATION:
                return $firstOperand +$secondOperand;
            case DIVISION:
                if ($firstOperand !=0){
                return $firstOperand +$secondOperand;
                    }else{
                    echo "Can not divide by 0";
                    break;
                }
            default:
                echo "Unsupported operation";
        }
    }
}