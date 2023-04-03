<?php
declare(strict_types=1);
include 'class-autoload.inc.php';

$operator = $_POST['operator'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$calculate = new Calc($operator, (int) $num1, (int) $num2);
try {
    echo "Result of " . $num1 . $operator . $num2 . " is " . $calculate->calculate();
} catch (TypeError $e) {
    echo "Error: " . $e->getMessage();
}