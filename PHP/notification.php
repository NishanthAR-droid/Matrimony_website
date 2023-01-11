<?php
include("db_connect.php");
session_start();
if (!isset($_SESSION['username'])) {
    header("location:home.php");
}
$username = $_SESSION['username'];
$sql0 = "SELECT *FROM `user_views` where `uname`='$username'";
$result0 = mysqli_query($conn, $sql0);
$row0 = mysqli_fetch_assoc($result0);
$search = $row0['search'];
$views = $row0['views'];
echo "<script>window.location.href='userhome.php';
                  alert('You appeared in $search searches. \\n $views people have viewed your profile.');
                  </script>";
?>