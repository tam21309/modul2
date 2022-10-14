<?php
class Calculator
{
    public function calculate($firstOperand, $secondOperand, $operator): float
    {
        switch ($operator) {
            case '+':
                return $firstOperand + $secondOperand;
            case '-':
                return $firstOperand - $secondOperand;
            case '*':
                return $firstOperand * $secondOperand;
            case '/':
                if ($secondOperand != 0) {
                    return $firstOperand / $secondOperand;
                } else {
                    return "Can not divide by 0";
                }
            default:
                return "Unsupported operation";
        }
    }
}

const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';

class Calculation {
    public function calculate($firstOperand, $secondOperand, $operator)
    {
        switch ($operator) {
            case 'ADDITION':
                return $firstOperand + $secondOperand;
            case 'SUBTRACTION':
                return $firstOperand - $secondOperand;
            case 'MULTIPLICATION':
                return $firstOperand * $secondOperand;
            case 'DIVISION':
                if ($secondOperand != 0) {
                    return $firstOperand / $secondOperand;
                } else {
                    return "Can not divide by 0";
                }
            default:
                return "Unsupported operation";
        }
    }
}
$obj = new Calculation();
echo $obj-> calculate(5,4,'SUBTRACTION');
