<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach loops in PHP</title>
</head>
<body>
    <?php
    // Example of foreach loops in PHP
    $fruits = ["Apple", "Banana", "Cherry", "Date"];    
    echo "<h2>Fruits List:</h2>";
    foreach ($fruits as $fruit) {
        echo "<p>$fruit</p>";
    }    
    
    $students = [
        ["name" => "Alice", "age" => 20, "grade" => "A"],
        ["name" => "Bob", "age" => 22, "grade" => "B"],
        ["name" => "Charlie", "age" => 21, "grade" => "C"]
    ];
    echo "<h2>Students List:</h2>";
    foreach ($students as $student) {
        echo "<p>Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . "</p>";
    }
    ?>

</body>
</html>