<?php include("db_connect.php");
if (isset($_POST['submit'])) {
   $username = $_POST['username'];
   $passwd = $_POST['password'];
   $sql = "SELECT *FROM `USER_LOGIN` WHERE `uname`='$username'";
   $result = mysqli_query($conn, $sql);
   $count = mysqli_num_rows($result);
   if ($count == 1) {
      $row = mysqli_fetch_assoc($result);
      if ($passwd == $row['passwd']) {
         session_start();
         $_SESSION['username'] = $username;
         if ($username == 'admin')
            header("location:adminhome.php");
         else
            header("location:userhome.php");
      } else {
         if ($username == 'admin') {
            echo "<script>window.location.href='adminlogin.php';
                 alert('incorrect password');
                 </script>";
         } else {
            echo "<script>window.location.href='login.php';
            alert('incorrect password');
            </script>";
         }
      }
   } else {
      echo "<script>window.location.href='home.php';
        alert('account not created,first signup');
        </script>";
   }
}
?>