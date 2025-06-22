<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math functions</title>
</head>
<body>
   <?php
    // Math functions in PHP
    $x = 10;
    $y = 3;
    $z = 5;

    // Basic arithmetic operations
    echo "Addition: " . ($x + $y) . "<br>"; // Outputs 13
    echo "Subtraction: " . ($x - $y) . "<br>"; // Outputs 7
    echo "Multiplication: " . ($x * $y) . "<br>"; // Outputs 30
    echo "Division: " . ($x / $y) . "<br>"; // Outputs 3.3333...

    // Using math functions
    echo "Power: " . pow($x, $y) . "<br>"; // Outputs 1000 (10^3)
    echo "Square root of x: " . sqrt($x) . "<br>"; // Outputs 3.1622776601684
    echo "Maximum of x, y and z: " . max($x, $y, $z) . "<br>"; // Outputs 10
    echo "Minimum of x, y and z: " . min($x, $y, $z) . "<br>"; // Outputs 3
    echo "Absolute value of -x: " . abs(-$x) . "<br>"; // Outputs 10
    echo "Random number: " . rand(1, 100) . "<br>"; // Outputs a random number between 1 and 100
    echo "Round number 3.14159: " . round(3.14159) . "<br>"; // Outputs 3
    
    ?> 
</body>
</html>