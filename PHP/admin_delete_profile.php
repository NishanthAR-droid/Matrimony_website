<?php require("db_connect.php");
session_start();
if (!isset($_SESSION['username'])) {
  header("location:home.php");
} else {
  $username = $_GET['id'];
  $sql = "DELETE FROM `user_login` WHERE `uname`= '$username'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "<script>window.location.href='adminhome.php';
                  alert('Profile successfully deleted');
                  </script>";
  }
}
?>