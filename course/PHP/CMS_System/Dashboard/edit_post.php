<?php
session_start();
if (!isset($_SESSION['u_id'])) {
    echo "<script>alert('You must be logged in to view this page.'); window.location.href='login.php';</script>";
} else {
include 'mycon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Post</title>

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
        .require {
            color: #666;
        }
        label small {
            color: #999;
            font-weight: normal;
            }
        .post{
            margin: 0 auto;
            width: 100%;
            margin-top: 20px;
            margin-bottom:10px;
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

                <!-- Topbar -->
                <?php include 'topbar.php';?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">
        <div class="row post">
            <div class="col-12">
            <?php
            if (isset($_GET['edit_id'])) {
                $post_id = $_GET['edit_id'];
                $sql = "SELECT * FROM all_posts WHERE p_id = '$post_id'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $p_id = $row['p_id'];
                    $p_title = $row['p_title'];
                    $p_description = $row['p_description'];
                    $p_content = $row['p_content'];
                    $p_pic = $row['p_pic'];
                
                ?>
                <h1>Edit Post</h1>

                <form action="" method="POST" enctype="multipart/form-data">
                    
                    <div class="form-group has-error">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="p_title" value="<?php echo $p_title;?>" />
                    </div>
                    
                 
                    <div class="form-group">
                        <label for="">Post Description</label>
                         <textarea rows="5" class="form-control" name="p_description"><?php echo $p_description; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Post Content</label>
                        <textarea rows="15" class="form-control" name="p_content" ><?php echo $p_content; ?></textarea>
                    </div>
                    
                    <div class="form-group">
                            <label>Picture</label>
                            <input type="file" name="p_pic" class="form-control">
                            <img src="../postImages/<?php echo $p_pic;?>" width="100" height="100" alt="">
                        </div>
                        <br>
                    <div class="form-group">
                            <input type="submit" value="Update" name="update" class="btn btn-primary">
                    </div>
                </form>
                <?php }} ?>
        </div>
         </div>   
    </div>
   <?php
   if (isset($_POST['update'])) {
    $p_id = $_GET['edit_id'];

    // Fetch old values from DB
    $sql = "SELECT * FROM all_posts WHERE p_id = '$p_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $old_title = $row['p_title'];
    $old_description = $row['p_description'];
    $old_content = $row['p_content'];
    $old_pic = $row['p_pic'];

    // Use old values if fields are empty
    $p_title = !empty($_POST['p_title']) ? $_POST['p_title'] : $old_title;
    $p_description = !empty($_POST['p_description']) ? $_POST['p_description'] : $old_description;
    $p_content = !empty($_POST['p_content']) ? $_POST['p_content'] : $old_content;
    $p_pic = !empty($_FILES['p_pic']['name']) ? $_FILES['p_pic']['name'] : $old_pic;
    $target = "../postImages/" . basename($p_pic);
    $p_user = $_SESSION['u_id'];

    // Only move file if a new one is uploaded
    if (!empty($_FILES['p_pic']['name'])) {
        if (move_uploaded_file($_FILES['p_pic']['tmp_name'], $target)) {
            echo "Image uploaded successfully";
        } else {
            echo "Failed to upload image";
        }
    }

    $update_query = "UPDATE all_posts SET p_title='$p_title', p_description='$p_description', p_content='$p_content', p_pic='$p_pic', p_user='$p_user' WHERE p_id='$p_id'";
    if (mysqli_query($conn, $update_query)) {
        $logged_user = $_SESSION['user_id'];
        $user = "SELECT * FROM all_users WHERE u_id='$logged_user'";
        $user_result = mysqli_query($conn, $user);
        $row = mysqli_fetch_assoc($user_result);

        if ($row['u_is_admin'] == 'True') {      
            echo '<script>window.open("all_posts.php","_self")</script>';
        }else{
            echo '<script>alert("Post Updated.)</script>';
            echo '<script>window.open("your_posts.php","_self")</script>';
        }
    } else {
        echo "Error updating post: " . mysqli_error($conn);
    }
}
    ?>

    <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>Copyright &copy; FranCodeExample.com 2025</span>
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
<?php } ?>