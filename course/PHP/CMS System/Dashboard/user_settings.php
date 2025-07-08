<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User Profile Setting</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
         .register{
            margin: auto;
            width: 50%;
            margin-top: 20px;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php';?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Navbar -->
                <?php include 'navbar.php';?>
                <!-- End of Navbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
        <div class="row register">
            <div class="col-12">
          
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title">User Profile Updation</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="u_name" value="" class="form-control" >
                        </div> 
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="u_email" value="" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="u_pwd" value="" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Picture</label>
                            <input type="file" name="u_pic" class="form-control">
                            <img src="" alt="" width="80" height="80">
                        </div>

                        <div class="form-group">
                            <label>DOB</label>
                            <input type="date" name="u_dob" value="" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" name="u_country" value="" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="u_city" value="" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Website</label>
                            <input type="url" name="u_site" value="" class="form-control" >
                        </div>
                        <label>Bio</label>
                        <div class="form-group">
                            <textarea name="u_bio" id="" cols="64" rows="10" class="form-control"></textarea>
                        </div>
                      
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" name="update" class="btn btn-success" value="Update">
                    </div>
                </form>  
            </div>
            <?php
            


            if (isset($_FILES['u_pic']) && $_FILES['u_pic']['error'] == 0 ) {
                $u_pic = $_FILES['u_pic']['name'];
                $u_pic_tmp = $_FILES['u_pic']['tmp_name'];
                $u_pic_size = $_FILES['u_pic']['size'];
                $u_pic_type = $_FILES['u_pic']['type'];
                
                // Validate file type
                $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
                if (!in_array($u_pic_type, $allowed_types)) {
                    echo "<script>alert('Only JPEG, PNG, and GIF files are allowed')</script>";
                    exit();
                }
                
                if($u_pic_size > 2000000) {
                    echo "<script>alert('Image size should be less than 2MB')</script>";
                    exit();
                } else {
                    // Create unique filename to avoid conflicts
                    $u_pic = time() . '_' . $u_pic;
                    move_uploaded_file($u_pic_tmp, "img/$u_pic");
                }

                if(!empty($_FILES['u_img']['name'])){
                    $img = $_FILES['u_img']['name'];
                    $tmp_img = $_FILES['c_img']['tmp_name'];
                    move_uploaded_file($tmp_img, "img/$u_pic");
                    $update_query = "UPDATE customer_info SET c_name='$name', c_email='$email', c_password='$pwd', c_city='$city', c_order='$order', c_country='$country', c_img='$img' WHERE c_id='$id'";
        } else {
            $update_query = "UPDATE customer_info SET c_name='$name', c_email='$email', c_password='$pwd', c_city='$city', c_order='$order', c_country='$country' WHERE c_id='$id'";
        }
            }

            
            ?>
        </div>
        </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>Copyright &copy; JafriCode.com 2022-23</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
