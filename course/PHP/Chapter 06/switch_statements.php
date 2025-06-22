<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch case in PHP</title>
</head>
<body>
    <?php
    // Example of switch statements in PHP
    $day = "Monday";
    switch ($day) {
        case "Monday":
            echo "It's the start of the week!<br>";
            break;
        case "Tuesday":
            echo "It's Tuesday!<br>";
            break;
        case "Wednesday":
            echo "It's Wednesday!<br>";
            break;
        case "Thursday":
            echo "It's Thursday!<br>";
            break;
        case "Friday":
            echo "It's Friday!<br>";
            break;
        case "Saturday":
            echo "It's the weekend!<br>";
            break;
        case "Sunday":
            echo "It's Sunday, time to relax!<br>";
            break;
        default:
            echo "Not a valid day.<br>";
    }
    ?>
</body>
</html>