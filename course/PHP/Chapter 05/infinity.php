<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Infinity in PHP
    echo PHP_FLOAT_MAX . "<br>"; // Maximum float value
    $x = 5;
    echo is_infinite($x) . "<br>"; // Check if $x is infinite

    $y = 1.7976931348623157E+308; // A very large float value
    echo is_infinite($y) . "<br>"; // Check if $y is infinite

    $z = 1.7976931348623157E+309; // This will be considered infinite
    echo is_infinite($z) . "<br>"; // Check if $z is infinite

    echo var_dump(is_infinite($z)) . "<br>"; // Detailed check for infinity

    echo var_dump(is_finite($x)) . "<br>"; // Check if $x is finite
    ?>
    <p>Infinity in PHP is represented by a very large float value, and it can be checked using the is_infinite() function.</p>
</body>
</html>