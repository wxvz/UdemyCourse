<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative array in PHP</title>
</head>
<body>
    <?php
    // Example of associative arrays in PHP
    $person = [
        "name" => "John Doe",
        "age" => 30,
        "email" => "Example@gmail.com", 
    ];
    $marks = array("Math" => 85, "Science" => 90, "English" => 88);
    echo "<h2>Person Details:</h2>";
    echo "Name: " . $person["name"] . "<br>";
    echo "Marks:<br>";
    
    foreach ($marks as $subject => $mark) {
        echo "$subject: $mark<br>";
    }
    ?>
</body>
</html>