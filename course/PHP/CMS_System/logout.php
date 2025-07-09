<?php
session_start();
session_destroy();

echo "<script>alert('You have logged out successfully!');</script>";
echo "<script>window.open('login.php','_self')</script>";
?>