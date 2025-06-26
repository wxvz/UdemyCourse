<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="">
        <label for="num1">Enter first number:</label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label for="num2">Enter second number:</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <input type="submit" name="sub">
    </form>
    <?php
    // Problem 4: 
    if (isset($_GET['sub'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        if ($num1 == $num2) {
            $equal = true;
            echo $equal. "<br>" . "Both numbers are equal.";
        }
        else 
        {
            $equal = false;
            echo $equal . "<br>" . "Both numbers are not equal.";
        }
    }
    ?>
</body>
</html>