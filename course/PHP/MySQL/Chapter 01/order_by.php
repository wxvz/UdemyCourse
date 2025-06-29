<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order by in MySQL</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";     
    $password = "";
    $dbname = "school";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $std_q = "SELECT * FROM school ORDER BY std_age DESC";
    $result = mysqli_query($conn, $std_q);
    if ($result) 
    {
        echo "<h2>Students Ordered by Age (Descending):</h2>";
        while 
        ($row = mysqli_fetch_assoc($result)) 
        {
            echo "Name: " . $row['std_name'] . ", Age: " . $row['std_age'] . "<br>";
        }
    } 
    else 
    {
        echo "Error: " . mysqli_error($conn);
    }
    // Close the connection
    mysqli_close($conn);
    ?>
</body>
</html>