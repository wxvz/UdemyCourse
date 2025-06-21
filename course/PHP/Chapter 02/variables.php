<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables</title>
</head>
<body>
    <h1>PHP Variables</h1>
    <?php
    $name = "Alex";
    echo $name;
    echo"<br>";
    $a = 9;
    $b = 10;
    echo $a + $b;
    echo "<br>";
    echo $a - $b;
    echo "<br>";
    echo $a / $b;
    echo "<br>";
    echo $a * $b;
    $age = 10;
    echo "<br>";
    echo $age;
    echo "<br>"; 


    // functions . classes, loops

    function myfunc() {
       $course = "PHP";
       echo $course;  
       $c = 43;
    }
    myfunc()
    ?>
</body>
</html>