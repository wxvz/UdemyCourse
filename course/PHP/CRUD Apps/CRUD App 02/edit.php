<?php
session_start();

if (!isset($_SESSION['c_id'])) {
    header("Location: index.php");
    exit();
} else {
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if(isset($_GET['edit'])){
            $id = $_GET['edit'];
            $all_customers = "SELECT * FROM customer_info WHERE c_id='$id'";
            $result = $conn->query($all_customers);
            while($row = $result->fetch_assoc()){
                $id = $row['c_id'];
                $name = $row['c_name'];
                $email = $row['c_email'];
                $pwd = $row['c_password'];
                $city = $row['c_city'];
                $order = $row['c_order'];
                $country = $row['c_country'];
                $img = $row['c_img'];
          
        ?>

        <form method="post" action="" enctype="multipart/form-data">
            <div class="modal-header">
                <h4 class="modal-title">Update Profile</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="c_name" value="<?php echo $name;?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="c_email" value="<?php echo $email;?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="c_pwd" value="<?php echo $pwd;?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" name="c_city" value="<?php echo $city;?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Order</label>
                    <input type="text" name="c_order" value="<?php echo $order;?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Country</label>
                    <input type="text" name="c_country" value="<?php echo  $country;?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Picture</label>
                    <input type="file" name="c_img" class="form-control">
                    <img src="images/<?php echo $img;?>" alt="">
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" name="update" class="btn btn-success" value="Update">
            </div>
        </form>
      
    </div>
    <?php
    if(isset($_POST['update'])){
        $name = $_POST['c_name']; 
        $email = $_POST['c_email'];
        $pwd = $_POST['c_pwd'];
        $city = $_POST['c_city'];
        $order = $_POST['c_order'];
        $country = $_POST['c_country'];

        // Get the current image from the database if no new image is uploaded
        if(!empty($_FILES['c_img']['name'])){
            $img = $_FILES['c_img']['name'];
            $tmp_img = $_FILES['c_img']['tmp_name'];
            move_uploaded_file($tmp_img, "images/$img");
            $update_query = "UPDATE customer_info SET c_name='$name', c_email='$email', c_password='$pwd', c_city='$city', c_order='$order', c_country='$country', c_img='$img' WHERE c_id='$id'";
        } else {
            $update_query = "UPDATE customer_info SET c_name='$name', c_email='$email', c_password='$pwd', c_city='$city', c_order='$order', c_country='$country' WHERE c_id='$id'";
        }

        $update_result = $conn->query($update_query);
        if($update_result){
            echo "<script>alert('Customer Profile updated successfully!');</script>";
            echo "<script>window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Error updating profile.');</script>";
        }
    }
       
}
?>
</body>
</html>
<?php }}?>
