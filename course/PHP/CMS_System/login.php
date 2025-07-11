<?php
session_start();
include 'mycon.php';  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .login{
            margin: auto;
            width: 50%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row login">
            <div class="col-12">
                <form method="post">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" name="u_email" id="form2Example1" class="form-control" />
                      <label class="form-label" for="form2Example1">Email address</label>
                    </div>
                  
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" name="u_pwd" id="form2Example2" class="form-control" />
                      <label class="form-label" for="form2Example2">Password</label>
                    </div>
                  
                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                      <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                          <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                      </div>
                  
                      <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                      </div>
                    </div>
                  
                    <!-- Submit button -->
                    <input type="submit" name="login" value="Login" class="btn btn-primary btn-block mb-4">
                    <!-- Register buttons -->
                    <div class="text-center">
                      <p>Not a member? <a href="register.php">Register</a></p>
                      
                    </div>
                  </form>
                <?php
                if(isset($_POST['login'])){
                    $u_email = $_POST['u_email'];
                    $u_pass = $_POST['u_pwd'];
                    

                    $check_user = "SELECT * FROM all_users WHERE u_email='$u_email'";
                    $result = mysqli_query($conn, $check_user);
                    if($result && mysqli_num_rows($result) == 1) {
                        $row = mysqli_fetch_assoc($result);
                        if(password_verify($u_pass, $row['u_pwd'])) {
                          $_SESSION['u_id'] = $row['u_id'];
                          echo "<script>alert('Login successful!')</script>";
                          echo "<script>window.open('index.php','_self')</script>";
                        } else {
                        echo "<script>alert('Invalid email or password!')</script>";
                        }
                      } else {
                      echo "<script>alert('User not found!')</script>";
                    }
                }
                ?>
        </div>
    </div>
      
</div>
</body>
</html>