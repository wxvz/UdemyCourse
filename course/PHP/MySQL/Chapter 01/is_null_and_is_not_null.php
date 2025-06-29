<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>is Null and is not Null</title>
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
    // Query to find students with null or non-null country
    $null_query = "SELECT * FROM std_info WHERE std_country IS NULL";
    $not_null_query = "SELECT * FROM std_info WHERE std_country IS NOT NULL";
    $null_result = mysqli_query($conn, $null_query);
    $not_null_result = mysqli_query($conn, $not_null_query);

    // Check if the queries were successful and display results
    if ($null_result) 
    {
        echo "<h2>Students with Null Country:</h2>";
        while ($row = mysqli_fetch_assoc($null_result)) 
        {
            echo "Name: " . $row['std_name'] . ", Age: " . $row['std_age'] . "<br>";
        }
    } 
    else 
    {
        echo "Error: " . mysqli_error($conn);
    }

    if ($not_null_result) 
    {
        echo "<h2>Students with Non-Null Country:</h2>";
        while ($row = mysqli_fetch_assoc($not_null_result)) 
        {
            echo "Name: " . $row['std_name'] . ", Age: " . $row['std_age'] . ", Country: " . $row['std_country'] . "<br>";
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