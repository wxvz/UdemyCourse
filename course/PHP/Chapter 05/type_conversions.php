<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Type Conversions </title>
</head>
<body>
    <?php
    // Type conversions in PHP
    $a = 10; // Integer
    echo var_dump($a) . "<br>"; // Display type and value of $a
    $b = "20"; // String
    echo var_dump($b) . "<br>"; // Display type and value of $b
    $c = 30.5; // Float
    echo var_dump($c) . "<br>"; // Display type and value of $c#
    $d = true; // Boolean
    echo var_dump($d) . "<br>"; // Display type and value of $d
    echo "<br>";

    // Initiating conversions
    echo "Implicit conversions:<br>";

    echo "Integer to String: ";
    $e = (string)$a; // Integer to String
    echo var_dump($e) . "<br>"; 

    echo "String to Integer: ";
    $f = (int)$b; // String to Integer
    echo var_dump($f) . "<br>"; 

    echo "Float to Integer: ";
    $g = (int)$c; // Float to Integer
    echo var_dump($g) . "<br>";

    echo "Boolean to Integer: ";
    $h = (int)$d; // Boolean to Integer
    echo var_dump($h) . "<br>"; 

    echo "String to Float: ";
    $i = (float)$b; // String to Float
    echo var_dump($i) . "<br>"; 

    echo "Boolean to String: ";
    $j = (string)$d; // Boolean to String
    echo var_dump($j) . "<br>"; 

    echo "Integer to Boolean: ";
    $k = (bool)$a; // Integer to Boolean#
    echo var_dump($k) . "<br>"; 

    echo "Float to Boolean: ";
    $l = (bool)$c; // Float to Boolean#
    echo var_dump($l) . "<br>"; 

    ?>
</body>
</html>