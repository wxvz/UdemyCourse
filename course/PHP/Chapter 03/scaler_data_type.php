<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Type</title>
</head>
<body>
    <h1>Data type in PHP</h1>
    <?php
    $s = "Frank";
    $s1 = "Frank 'Sir' Aka";
    $s2 = 'Frank "Sir" Aka';
    $age - 45;

    echo "Your age is $age"
    echo "<br>";
    echo $s;
    echo "<br>";
    echo  $s1;
    echo "<br>";
    echo  $s2;
    echo "<br>";

    
    echo strlen($s);
    echo "<br>";
    echo str_word_count($s1)
    echo "<br>";
    echo strrev($s2);


    $num = 34;
    $price = 34.34;
    echo "<br>";
    echo var_dump($num);
    echo "<br>";
    echo var_dump($price);
    

    $val = FALSE; #1/0 
    echo $val;
    $a = 2;
    $b = 2;
    echo ($a==$b);
    ?>
</body>
</html>