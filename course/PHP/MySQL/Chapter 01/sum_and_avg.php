<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUM and AVG in MySQL</title>
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
    // Create a table if it doesn't exist
    $create_table_query = "CREATE TABLE IF NOT EXISTS new_students (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        age INT(3) NOT NULL,
        marks INT(3) NOT NULL
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
    $insert_query = "INSERT INTO new_students (name, age, marks) VALUES 
    ('John Peterson', 20, 85),
    ('Jane Demerson', 26, 90),     
    ('Johan Berlison', 19, 78), 
    ('Bobby Moore', 21, 88), 
    ('Charles White', 18, 92)";
    
    if ($conn->query($insert_query) === TRUE)
    {
        echo "Sample data inserted successfully.<br>";
    }
    else 
    {        
        echo "Error inserting data: " . $conn->error . "<br>";
    }
    // Calculate the total marks and average age of students
    $avg_sum_query = "SELECT SUM(marks) AS total_marks, AVG(age) AS average_age FROM new_students";
    $result = $conn->query($sum_query);
    if ($result)    
    {   
        $row = $result->fetch_assoc();
        echo "Total Marks: " . $row['total_marks'] . "<br>";
        echo "Average Age: " . $row['average_age'] . "<br>";
    }
    else 
    {
        echo "Error calculating sum and average: " . $conn->error . "<br>";
    }   
    // Close the connection
    $conn->close();
    ?>
</body>
</html>