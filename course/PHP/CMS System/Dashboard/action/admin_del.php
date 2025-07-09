<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['del'])) {
    $id = $_GET['del'];
}
$delete_query = "DELETE FROM all_users WHERE id='$id'";   
if(mysqli_query($conn, $delete_query)) {
    echo '<script>alert("User deleted.)</script>';
    echo '<script>window.open("index.php","_self")</script>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>