<?php
include("db_connect.php");
session_start();
if (isset($_POST["submit"])) {
    $username = $_SESSION['username'];
    $rating = $_POST["rating"];
    $feedback = $_POST["feedback"];
    $sql = "INSERT INTO `user_feedback` (`uname`,`rating`,`feedback`) VALUES ('$username','$rating','$feedback')";
     $result = mysqli_query($conn, $sql);
       if ($result) {
           echo "<script>window.location.href='userhome.php'; 
           alert('Thank you for your feedback');
           </script>";
       }
}
?>