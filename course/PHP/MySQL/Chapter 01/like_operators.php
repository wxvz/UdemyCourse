<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Like operators in MySQL</title>
</head>
<body>
    <?php
    // Like operators in MySQL
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



    // Using LIKE operator
    $std_q = "SELECT * FROM std_info WHERE std_name LIKE 'F%A%'"; //matches names starting with 'F' and ending with 'A'
    $result = mysqli_query($conn, $std_q);
    if ($result) 
    {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row['std_id'] . "<br>";
            echo "Name: " . $row['std_name'] . "<br>";
            echo "Age: " . $row['std_age'] . "<br>";
            echo "Country: " . $row['std_country'] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    // Using NOT LIKE operator
    $std_q_not_like = "SELECT * FROM std_info WHERE std_name NOT LIKE 'F%'";
    $result_not_like = mysqli_query($conn, $std_q_not_like);    
    if ($result_not_like) 
    {
        while ($row = mysqli_fetch_assoc($result_not_like)) 
        {
            echo "ID: " . $row['std_id'] . "<br>";
            echo "Name: " . $row['std_name'] . "<br>";
            echo "Age: " . $row['std_age'] . "<br>";
            echo "Country: " . $row['std_country'] . "<br>";    
            echo "<hr>";
        }
    } 
    else 
    {
        echo "Error: " . mysqli_error($conn);
    }   
    
    $std_q = "SELECT * FROM std_info WHERE std_name LIKE 'B__%'"; //matches names starting with 'B' followed by exactly two characters
    $result = mysqli_query($conn, $std_q);
    if ($result) 
    {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row['std_id'] . "<br>";
            echo "Name: " . $row['std_name'] . "<br>";
            echo "Age: " . $row['std_age'] . "<br>";
            echo "Country: " . $row['std_country'] . "<br>";
            echo "<hr>";
        }
    }
    else 
    {
        echo "Error: " . mysqli_error($conn);
    }

    ?>
</body>
</html>