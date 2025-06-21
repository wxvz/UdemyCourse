<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //constant variables
    define("name", "Frank Aka");
    echo name;
    define("age", 32);
    echo age;
    
    //constant array
    define("colour",["red","green","blue"]);
    echo color[0];

    function myfun() {

        echo colour[2];
    }
    myfun();
    ?>
</body>
</html>