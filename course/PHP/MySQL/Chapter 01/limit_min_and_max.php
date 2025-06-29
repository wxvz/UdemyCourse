<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>min and max in sql</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);


    if (!$conn) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query to find the minimum and maximum age of students
    $min_max_query = "SELECT MIN(std_age) AS min_age, MAX(std_age) AS max_age FROM std_info";
    $result = mysqli_query($conn, $min_max_query);

    $limit_query = "SELECT std_name, std_age FROM std_info LIMIT 3";
    $limit_result = mysqli_query($conn, $limit_query);

    if ($limit_result) 
    {
        echo "<h2>First 5 Students:</h2>";
        while ($row = mysqli_fetch_assoc($limit_result)) 
        {
            echo "Name: " . $row['std_name'] . ", Age: " . $row['std_age'] . "<br>";
        }
    } 
    else 
    {
        echo "Error: " . mysqli_error($conn);
    }   

    if ($result) 
    {
        $row = mysqli_fetch_assoc($result);
        echo "Minimum Age: " . $row['min_age'] . "<br>";
        echo "Maximum Age: " . $row['max_age'] . "<br>";
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