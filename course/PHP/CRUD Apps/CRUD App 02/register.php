<!DOCTYPE html>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Customer Registeration</title>
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
        <form method="post" action="" enctype="multipart/form-data">
            <div class="modal-header">
                <h4 class="modal-title">Customer Registeration</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="c_name" value="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="c_email" value="" class="form-control"  required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="c_pwd" value="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" name="c_city" value="" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Order</label>
                    <input type="text" name="c_order" value="" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Country</label>
                    <input type="text" name="c_country" value="" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Picture</label>
                    <input type="file" name="c_img" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" name="register" class="btn btn-success" value="Register">
            </div>
        </form>
        <?php
        if (isset($_POST['register'])) {
            $name = $_POST['c_name'];
            $email = $_POST['c_email'];
            $password = $_POST['c_pwd'];
            $city = $_POST['c_city'];
            $order = $_POST['c_order'];
            $country = $_POST['c_country'];
            $image = $_FILES['c_img']['name'];
            $tmp_image = $_FILES['c_img']['tmp_name'];

            move_uploaded_file($tmp_image, "images/$image");

            $insert_customer = "INSERT INTO customer_info (c_name, c_email, c_password, c_city, c_order, c_country, c_img) VALUES ('$name', '$email', '$password', '$city', '$order', '$country', '$image')";
            if (mysqli_query($conn, $insert_customer)) {
                echo "<script>alert('Customer registered successfully!');</script>";
                echo "<script>window.open('login.php','_self')</script>";
            } else {
                echo "Error: " . $insert_customer . "<br>" . mysqli_error($conn);
            }

        }
        ?>
    </div>
</body>
</html>