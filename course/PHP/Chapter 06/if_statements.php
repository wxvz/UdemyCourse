<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If statements in PHP</title>
</head>
<body>
    <?php
    // Example of if statements in PHP
    $age = 20;
    $is_student = true;

    // Basic if statement
    if ($age >= 18) {
        echo "You are an adult.<br>";
    }
    // If-else statement
    if ($age < 18) 
    {
        echo "You are a minor.<br>";
    } 
    else 
    {
        echo "You are an adult.<br>";
    }
    // nested if statement
    if ($age >= 18) 
    {
        if ($is_student) 
        {
            echo "You are an adult student.<br>";
        } 
        else {
            echo "You are an adult non-student.<br>";
        }
    } 
    else {
        echo "You are a minor.<br>";
    }
    // if-else if-else statement
    if ($age < 13) 
    {
        echo "You are a child.<br>";
    } 
    elseif ($age < 18) 
    {
        echo "You are a teenager.<br>";
    } 
    else 
    {
        echo "You are an adult.<br>";
    }
    ?>
</body>
</html>