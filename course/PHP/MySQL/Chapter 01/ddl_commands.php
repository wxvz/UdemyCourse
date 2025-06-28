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
        std_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        std_name VARCHAR(30) NOT NULL,
        std_age INT(3) NOT NULL
    )";
    mysqli_query($conn, $q_std_info);

    // $std_q ="ALTER TABLE std_info  ADD COLUMN std_country VARCHAR(10) NOT NULL";
    // mysqli_query($conn, $std_q);

    // $s = "TRUNCATE TABLE std_info";
    // mysqli_query($conn, $s); //delete all records from the table

    // $d = "DROP TABLE IF EXISTS std_info";
    // mysqli_query($conn, $d); //delete the table

    // Insert sample data into std_info table
    $insert_query = "INSERT INTO std_info (std_name, std_age, std_country) VALUES 
    ('John Doe', 20, 'Milan'),
    ('Jane Smith', 22, 'Belgium'),
    ('Alice Johnson', 19, 'Ireland'), 
    ('Bob Brown', 21, 'USA'), 
    ('Charlie White', 23, 'Canada')"
    ;
    if (mysqli_query($conn, $insert_query)) {
        echo "Sample data inserted successfully.<br>";
    }
    else 
    {
        echo "Error inserting sample data: " . mysqli_error($conn) . "<br>";
    }
    ?>
    
</body>
</html>