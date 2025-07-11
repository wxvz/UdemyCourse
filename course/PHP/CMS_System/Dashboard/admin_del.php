<?php 
session_start();
if (!isset($_SESSION['u_id'])) {
    echo "<script>alert('You must be logged in to view this page.'); window.location.href='login.php';</script>";
} else {
include 'mycon.php';

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

<?php } ?>