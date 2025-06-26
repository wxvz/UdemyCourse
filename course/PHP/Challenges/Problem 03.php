<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 3</title>
</head>
<body>  
    <form method="get" action="">
        <input type="text" name="main_str" placeholder="Enter String">
        <br>
        <input type="text" name="find" placeholder="Find">
        <br>
        <input type="text" name="replace" placeholder="Replace">
        <br>
        <input type="submit" name="sub" value="Submit">
    </form>

    <?php
    if (isset($_GET['sub'])) {
        $main_str = $_GET['main_str'];
        $find = $_GET['find'];
        $replace = $_GET['replace'];
        str_replace($find, $replace, $main_str, $count);
        echo "Your string is : " . "\"$main_str\"" . "<br>";
        echo "The string after replacing \"$find\" with \"$replace\" is : " . str_replace($find, $replace, $main_str) . "<br>";
        echo "The number of replacements made is : " . $count . "<br>";
        echo "The number of words in the string is : " . str_word_count($main_str) . "<br>";
    }
    ?>
</body>
</html>