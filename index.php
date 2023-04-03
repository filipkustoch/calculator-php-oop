<?php
declare(strict_types=1);
include 'includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator - PHP OOP</title>
</head>

<body>
    <form action="includes/calc.inc.php" method="POST">
        <p>Calculator</p>
        <input type="number" name="num1" placeholder="First number">
        <select name="operator">
            <option value="+">Addition</option>
            <option value="-">Substraction</option>
            <option value="/">Division</option>
            <option value="*">Multiplication</option>
        </select>
        <input type="number" name="num2" placeholder="Second number">
        <button type="submit" name="submit">Calculate</button>
    </form>
</body>

</html>