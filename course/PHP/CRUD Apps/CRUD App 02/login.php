<!DOCTYPE html>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
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
                <h4 class="modal-title">Customer Login</h4>
            </div>
            <div class="modal-body">
                
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="c_email" value="" class="form-control" required> 
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="c_password" value="" class="form-control" required>
                </div>
               
            <div class="modal-footer">
                <input type="submit" name="login" class="btn btn-success" value="Login">
            </div>
        </form>
        <p>Don't have account, then create your account at first.</p>
        <a href="register.php" role="button" class="btn btn-primary">Register</a>
        <?php
        if (isset($_POST['login'])) {
            $email = $_POST['c_email'];
            $password = $_POST['c_password'];
            $sql = "SELECT * FROM customer_info WHERE c_email='$email' AND c_password='$password'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $num_of_rows = mysqli_num_rows($result);
            if ($num_of_rows = 1) {
                $_SESSION['c_id'] = $row['c_id'];
                echo "<script>alert('Login Successful')</script>";
                echo "<script>window.open('index.php','_self')</script>";
            
            }
            else {
                echo "<script>alert('Email or Password is incorrect, try again.')</script>";
            }
        }
        ?>
             
    </div>
</body>
</html>