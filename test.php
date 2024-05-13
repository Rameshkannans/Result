<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Type Animation</title>
</head>
<body>
    
<form>
    <input type="number" name="v1">
    <input type="number" name="v2">
    <input type="submit" name="">
</form>


<?php
class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }

    public function divide($a, $b) {
        if ($b == 0) {
            return "Division by zero is not allowed.";
        }
        return $a / $b;
    }
}

$calculator = new Calculator();

// Perform calculations
$num1 = 10;
$num2 = 5;

echo $sum = $calculator->add($num1, $num2)."<br>";
echo $diff = $calculator->subtract($num1, $num2)."<br>";
echo $product = $calculator->multiply($num1, $num2)."<br>";
echo $quotient = $calculator->divide($num1, $num2);

// echo "Addition: $num1 + $num2 = $sum<br>";
// echo "Subtraction: $num1 - $num2 = $diff<br>";
// echo "Multiplication: $num1 * $num2 = $product<br>";
// echo "Division: $num1 / $num2 = $quotient<br>";
?>

</body>
</html>
