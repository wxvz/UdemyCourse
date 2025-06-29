<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count In MySQL</title>
</head>
<body>
    <?php
    // Connect to the MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school";

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

    
    $create_table_query = "CREATE TABLE IF NOT EXISTS new_students (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        age INT(3) NOT NULL
    )";
    if ($conn->query($create_table_query) === TRUE)
    {
        echo "Table 'new_students' created successfully.<br>";
    } 
    else 
    {
        echo "Error creating table: " . $conn->error . "<br>";
    }
    // Insert sample data into the new_students table
    $insert_query = "INSERT INTO new_students (name, age) VALUES 
    ('John Peterson', 20),
    ('Jane Demerson', 26),     
    ('Johan Berlison', 19), 
    ('BobbY Moore', 21), 
    ('Charles White', 18";
    if ($conn->query($insert_query) === TRUE)
    {
        echo "Sample data inserted successfully.<br>";
    }
    else 
    {        
        echo "Error inserting data: " . $conn->error . "<br>";
    }
    // Count the number of new_students in the table
    $count_query = "SELECT DISTINCT COUNT(*) AS total_new_students FROM new_students";
    $result = $conn->query($count_query);
    if ($result)    
    {
        $row = $result->fetch_assoc();
        echo "Total number of new_students: " . $row['total_new_students'] . "<br>";
    }
    else 
    {
        echo "Error counting new_students: " . $conn->error . "<br>";
    }
    // Close the connection
    $conn->close();
    ?>

</body>
</html>