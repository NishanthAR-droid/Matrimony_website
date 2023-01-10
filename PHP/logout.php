<?php
include("db_connect.php");
session_start();
if (!isset($_SESSION['username'])) {
    header("location:home.php");
  } 
session_unset();
session_destroy();
echo "<script>window.location.href='home.php';
                  alert('You have logged out successfully');
                  </script>";
?>