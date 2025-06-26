<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 2</title>
</head>
<body>
    <form method="get" action="">
        <label for="str">Enter a string:</label>
        <br>
        <input type="text" name="str" required>
        <br>
        <input type="submit" name="sub" value="Submit">
    </form>
    <?php
    // Problem 2: Writing a PHP Script to find the length of a string
    // and display the string along with its length
    if (isset($_GET['sub'])) {
        $st = $_GET['str'];
        echo "Your string is : " . "\"$st\"" . "<br>";
        echo "The Length of the string is : " . strlen($st) . " characters long" . "<br>";
    }
    ?>
</body>
</html>