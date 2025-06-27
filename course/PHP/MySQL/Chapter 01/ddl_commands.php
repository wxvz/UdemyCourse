<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DDL Commands</title>
</head>
<body>
    <?php
    // DDL Commands in MySQL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else 
    {
        echo "Connected successfully<br>";
    }

    // Create database if it does not exist
    $q = "CREATE database if not exists school";
    mysqli_query($conn, $q);

    $q_std_info = "CREATE TABLE IF NOT EXISTS std_info 
    (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        age INT(3) NOT NULL
    )";
    mysqli_query($conn, $q_std_info);
    ?>
</body>
</html>