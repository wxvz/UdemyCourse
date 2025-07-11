<?php 
session_start();
if (!isset($_SESSION['u_id'])) {
    echo "<script>alert('You must be logged in to view this page.'); window.location.href='login.php';</script>";
} else {
include 'mycon.php';

if(isset($_GET['del'])) {
    $id = $_GET['del'];
}
$delete_query = "DELETE FROM all_posts WHERE p_id='$id'";   
if(mysqli_query($conn, $delete_query)) {
    $logged_user = $_SESSION['user_id'];
    $user = "SELECT * FROM all_users WHERE u_id='$logged_user'";
    $user_result = mysqli_query($conn, $user);
    $row = mysqli_fetch_assoc($user_result);

    if ($row['u_is_admin'] == 'True') {
        echo '<script>alert("Post deleted.)</script>';
        echo '<script>window.open("all_posts.php","_self")</script>';
    }else{
        echo '<script>alert("Post deleted.)</script>';
        echo '<script>window.open("your_posts.php","_self")</script>';
    }
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>
<?php } $conn->close(); ?>