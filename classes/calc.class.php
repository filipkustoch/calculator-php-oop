<?php

class Calc
{
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $operator, int $num1, int $num2)
    {
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function calculate()
    {
        switch ($this->operator) {
            case '+':
                $result = $this->num1 + $this->num2;
                return $result;
            case '-':
                $result = $this->num1 - $this->num2;
                return $result;
            case '/':
                $result = $this->num1 / $this->num2;
                return $result;
            case '*':
                $result = $this->num1 * $this->num2;
                return $result;
            default:
                echo "Error";
                break;
        }
    }
}