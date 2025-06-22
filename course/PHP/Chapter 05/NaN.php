<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NaN in PHP</title>
</head>
<body>
    <?php
    // NaN in PHP
    $x = acos(8); #; // This will result in NaN
    echo "Value of x: " . $x . "<br>"; // Displays NaN
    echo var_dump(is_nan($x)) . "<br>"; // Detailed information about x
    $a = acos(1.01); // This will also result in NaN
    echo "Value of a: " . $a . "<br>"; // Displays NaN
    echo var_dump(is_nan($a)) . "<br>"; // Detailed information about a
    ?>
    <p>NaN stands for "Not a Number" and is used to represent undefined<p>
</body>
</html>