<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeric Strings</title>
</head>
<body>
    <?php
    // Numeric strings in PHP
    $a = "123"; // Numeric string
    echo is_numeric($a) ? "The variable 'a' is numeric.<br>" : "The variable 'a' is not numeric.<br>"; // Check if 'a' is numeric
    $b = 123;
    echo $a + $b . "<br>"; // Outputs 246, as PHP treats numeric strings as numbers in arithmetic operations
    ?>
    <p>Numeric strings are strings that contain numeric values. They can be used in mathematical operations.</p>
</body>
</html> 