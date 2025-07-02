<!DOCTYPE html>
<?php
// Include database connection file
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mystudents";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Student Management CRUD App</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="CSS/styles.css">


</head>
<body>
    <div class="container">
        <?php
            if(isset($_GET['edit'])) {
                $id = $_GET['edit'];
                $get_std = "select * from std where id='$id'";
                $std_obj = mysqli_query($conn, $get_std);
                while($row = mysqli_fetch_array($std_obj)){
                    $fname =  $row['fname'];
                    $lname =  $row['lname'];
                    $gaurdian =  $row['guardian'];
                    $email =  $row['email'];
                    $gender =  $row['gender'];
                    $subject =  $row['std_subject'];
                    $country =  $row['country'];
                    $city =  $row['city'];
                    $dob =  $row['dob'];
                    $address =  $row['std_address'];
                    $picture =  $row['picture'];
                }
            }

        ?>
        <form method="post" action="#" enctype="multipart/form-data">
            <div class="modal-header">
                <h4 class="modal-title">Edit Student</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="fname" value="<?php echo $fname; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" value="<?php echo $lname; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Guardians Name</label>
                    <input type="text" name="fathername" value="<?php echo $gaurdian; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" class="form-control">
                        <option value="<?php echo $gender;?>" ><?php echo $gender;?></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" name="subject" value="<?php echo $subject; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Country</label>
                    <select name="country" id="" name="country" class="form-control">
                        <option value="<?php echo $country;?>" ><?php echo $country;?></option>
                        <option value="UK">United Kingdom</option>
							<option value="usa">USA</option>
							<option value="CA">Canada</option>
							<option value="Switz">Switzerland</option>
							<option value="DE">Denmark</option>
							<option value="Ireland">Ireland</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" name="city" value="<?php echo $city; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>DOB</label>
                    <input type="date" name="dob" value="<?php echo $dob; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" name="address">
                    <?php echo $address; ?>
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Picture</label>
                    <input type="file" name="picture" class="form-control">
                    <img src="img/<?php echo $picture; ?>" width="50" height="50" alt="">
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" name="update" class="btn btn-success" value="Update">
            </div>
        </form>
        <?php
        if(isset($_POST['update'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $guardian = $_POST['guardian'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $subject = $_POST['subject'];
            $country = $_POST['country'];
            $city = $_POST['city'];
            $dob = $_POST['dob'];
            $address = $_POST['address'];
            $picture = $_FILES['picture']['name'];
            $tmp_name = $_FILES['picture']['tmp_name'];

            // Move the uploaded file to the img directory
            move_uploaded_file($tmp_name, "img/$picture");
            // Update the student record in the database
            $update_query = "UPDATE std SET fname='$fname', lname='$lname', guardian='$guardian', email='$email', gender='$gender', std_subject='$subject', country='$country', city='$city', dob='$dob', std_address='$address', picture='$picture' WHERE id='$id'";
            if(mysqli_query($conn, $update_query)) {
                echo '<script>alert("Student is updated successfully")</script>';
                echo '<script>window.open("index.php","_self")</script>';
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        ?>
    </div>
</body>
</html>