<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mystudents";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['del'])) {
    $id = $_GET['del'];
}
$delete_query = "DELETE FROM std WHERE id='$id'";   
if(mysqli_query($conn, $delete_query)) {
    echo '<script>alert("Student is deleted....)</script>';
    echo '<script>window.open("index.php","_self")</script>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>
