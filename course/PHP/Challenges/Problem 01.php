<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 1</title>
</head>
<body>
    <form method="get" action="">
        <label for="num1">Enter first number:</label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label for="num2">Enter second number:</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <input type="submit" value="Calculate"> 
    </form>
    <?php
    // Problem 1: Writing a PHP Script to square two numbers and add them together
    // and then display the result
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        // Calculate the square of both numbers
        $square1 = $num1 * $num1;
        $square2 = $num2 * $num2;

        // Adds the squares together
        $result = $square1 + $square2;

        // Displaying   the result
        echo "<h2>Result:</h2>";
        echo "The sum of the squares of $num1 and $num2 is: " . $result;
    }
    ?>
</body>
</html>