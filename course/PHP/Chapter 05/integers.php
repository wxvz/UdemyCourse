<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integers Number</title>
</head>
<body>
    <?php
    // Integer data type examples
    $a = 10; // Decimal
    $b = 0xA; // Hexadecimal (10 in decimal)
    $c = 012; // Octal (10 in decimal)
    $d = 0b1010; // Binary (10 in decimal)
    $e = 10.5; // Float (not an integer, but included for compaitsrison)
    $f = 10e3; // Scientific notation (10000 in decimal)
    

    echo "Decimal: $a <br>";
    echo "Hexadecimal: $b <br>";
    echo "Octal: $c <br>";
    echo "Binary: $d <br>";
    echo "Float (not an integer): $e <br>"; 
    echo "Scientific Notation: $f <br>";

    echo var_dump(is_int($a)) . "int? <br>"; // Checks if $a is an integer
    echo var_dump(is_int($b)) . "int?<br>"; // Checks if $b is an integer
    echo var_dump(is_int($c)) . "int? <br>"; // Checks if $c is an integer
    echo var_dump(is_int($d)) . "int? <br>"; // Checks if $d is an integer
    echo var_dump(is_int($e)) . "int? <br>"; // Checks if $e is an integer
    echo var_dump(is_int($f)) . "int? <br>"; // Checks if $f is an integer
    echo var_dump(is_float($e)) . "float? <br>"; // Checks if $e is a float
    echo "<br>";
    ?>
</body>
</html>