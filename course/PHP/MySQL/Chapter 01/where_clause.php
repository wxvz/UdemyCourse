<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Where clause in mysql</title>
</head>
<body>
    <?php
     // where clause in mysql
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school"; 


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
    // $std q = "SELECT * FROM std_info WHERE std_id not in (1, 2, 3)";
    $std_q = "SELECT * FROM std_info WHERE std_name = 'Frank Aka' and std_age = 20";
    $result = mysqli_query($conn, $std_q);
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "ID: " . $row['std_id'] . "<br>";
        echo "Name: " . $row['std_name'] . "<br>";
        echo "Age: " . $row['std_age'] . "<br>";
        echo "Country: " . $row['std_country'] . "<br>";
        echo "<hr>";
    }
    ?>
</body>
</html>