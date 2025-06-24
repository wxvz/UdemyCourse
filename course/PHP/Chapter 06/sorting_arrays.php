<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting arrays</title>
</head>
<body>
    <?php
    // Example of sorting arrays in PHP
    $numbers = [5, 2, 9, 1, 5, 6];
    $fruits = ["Banana", "Apple", "Cherry", "Mango"];
    $marks = [85, 90, 78, 92, 88];

    // Sort numbers in ascending order
    sort($numbers);
    echo "<h2>Sorted Numbers:</h2>";
    foreach ($numbers as $number) {
        echo $number . " ";
    }
    echo "<br>";

    // Sort fruits in alphabetical order
    sort($fruits); // This will sort the array in alphabetical order
    echo "<h2>Sorted Fruits:</h2>";
    foreach ($fruits as $fruit) {
        echo $fruit . " ";
    }
    echo "<br>";

    // Sort associative array by keys
    $associativeArray = [
        "banana" => 1,
        "apple" => 2,
        "cherry" => 3,
        "mango" => 4
    ];
    ksort($associativeArray); // This will sort the associative array by keys
    echo "<h2>Sorted Associative Array by Keys:</h2>";
    foreach ($associativeArray as $key => $value) {
        echo "$key: $value<br>";
    }
    echo "<br>";

    // Sort marks in descending order
    rsort($marks); // This will sort the array in descending order
    echo "<h2>Sorted Marks in Descending Order:</h2>";
    foreach ($marks as $mark) {
        echo $mark . " ";
    }
    echo "<br>";

    // Sort associative array by values
    $associativeArrayByValues = [
        "banana" => 1,
        "apple" => 2,
        "cherry" => 3,
        "mango" => 4
    ];
    asort($associativeArrayByValues); // This will sort the associative array by values
    echo "<h2>Sorted Associative Array by Values:</h2>";
    foreach ($associativeArrayByValues as $key => $value) {
        echo "$key: $value<br>";
    }
    echo "<br>";

    // Sort an array of strings by length
    $stringArray = ["apple", "banana", "kiwi", "cherry", "blueberry"];
    usort($stringArray, function($a, $b) {
        return strlen($a) - strlen($b);
    }); // This will sort the array by string length
    echo "<h2>Sorted Strings by Length:</h2>";
    foreach ($stringArray as $string) {
        echo $string . " ";
    }  
    echo "<br>";
    ?>
</body>
</html>