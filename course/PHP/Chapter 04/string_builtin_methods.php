<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Built in Methods</title>
</head>
<body>
    <?php
    $str = "How are you guys, I'm learning PHP";
    echo strlen($str) . "<br>"; // Length of the string
    echo str_word_count($str) . "<br>"; // Word count in the string
    echo strrev($str) . "<br>"; // Reverse the string
    echo strpos($str, "PHP") . "<br>"; // Position of the first occurrence
    echo str_replace("PHP", "Python", $str) . "<br>"; // Replace PHP with Python
    ?> 
    <p>These are some of the built-in string methods in PHP that help in manipulating and analyzing strings.</p>
</body>
</html>