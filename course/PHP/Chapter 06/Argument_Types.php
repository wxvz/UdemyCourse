<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Argument types in php</title>
</head>
<body>
    <?php
    // Example of argument types in PHP
    function addNumbers(int $a, int $b=10): int {
        return $a + $b;
    }
    addNumbers(5); // Calls the function with one argument, second argument defaults to 10
    
    ?>
</body>
</html>