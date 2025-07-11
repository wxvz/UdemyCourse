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

    <title>All Posts</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-9">
                        <h1 class="h3 mb-2 text-gray-800">All Posts Record</h1>

                        </div>
                        <div class="col-3">
                            <a href="#" role="button" class="btn btn-primary">Create Post</a>
                        </div>
                    </div>
                    <!-- Page Heading -->

                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Picture</th>
                                            <th>Content</th>
                                            <th>Author</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <?php 
                                    $sql = "SELECT * FROM all_posts";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $p_id = $row['p_id'];
                                            $p_title = $row['p_title'];
                                            $p_description = $row['p_description'];
                                            $p_content = $row['p_content'];
                                            $p_pic = $row['p_pic'];
                                            $p_user = $row['p_user'];
                                            // Fetch user name
                                            $user_query = "SELECT u_name FROM all_users WHERE u_id='$p_user'";
                                            $user_result = mysqli_query($conn, $user_query);
                                            $user_row = mysqli_fetch_assoc($user_result);
                                            $author_name = isset($user_row['u_name']) ? $user_row['u_name'] : 'Unknown';
                                    ?>
                                    <tbody>
                                            <td><?php echo $p_title;?></td>
                                            <td><?php echo $p_description;?></td>
                                            <td>
                                                <img src="../postImages/<?php echo $p_pic;?>" width="100" height="100" alt="">
                                            </td>
                                            <td><?php echo substr($p_content, 0, 50) . '...';?></td>
                                            <td><?php echo $author_name;?></td>
                                        
                                    <td> 
                                        <a href="blog_post_page.php?post_id=<?php echo $p_id;?>" class="" title="View" data-toggle="tooltip"><i class="fas fa-fw fa-eye"></i></a>
                                        <a href="edit_post.php?edit_id=<?php echo $p_id;?>" class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-fw fa-edit"></i></a>
                                        <a href="del_post.php?del=<?php echo $p_id;?>" class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-fw fa-trash"></i></a>
                                    </td>


                                        </tr>
                                        <?php 
                                        }
                                        } else {
                                            echo "<tr><td colspan='6'>No posts found</td></tr>";
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>Copyright &copy; FranCodeExample.com 202</span>
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
<?php
}
$conn->close();
?>