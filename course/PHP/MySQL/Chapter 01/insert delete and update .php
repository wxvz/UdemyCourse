<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Query Commands</title>
</head>
<body>
    <?php
    // Select Commands in MySQL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school";
    $name = 'Frank Aka';

    // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    else 
    {
        echo "Connected successfully<br>";
    }
    $std_insert = "INSERT INTO std_info (std_name, std_age, std_country) VALUES
    ('$name', 19, 'Ireland')";
    mysqli_query($conn, $std_insert);


    $std_update = "UPDATE std_info SET std_age = 20 WHERE std_name = '$name'";
    mysqli_query($conn, $std_update);
    // $std_delete = "DELETE FROM std_info WHERE std_name = '$name'";
    // mysqli_query($conn, $std_delete);
    

    ?>

</body>
</html>