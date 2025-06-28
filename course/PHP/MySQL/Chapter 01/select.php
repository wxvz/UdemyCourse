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
    $name = "Frank";
    $id = 1;
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
    
    // $all_std = " SELECT std_id, std_name, std_country  FROM std_info WHERE std_name = '$name' AND std_id = $id";
    $all_std = "SELECT * FROM std_info";
    $students = mysqli_query($conn, $all_std);

    if ($all_std){
        while ($user_row = mysqli_fetch_array($students)) {
            echo "Name: " . $user_row['std_name'] . "<br>";
            echo "Age: " . $user_row['std_age'] . "<br>";
            echo "Country: " . $user_row['std_country'] . "<br>";
            echo "---------------------<br>";
        }
    }
    // $user_row = mysqli_fetch_array($all_std);

    ?>

</body>
</html>