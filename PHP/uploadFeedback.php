<?php
include("db_connect.php");
session_start();
if (isset($_POST["submit"])) {
    $username = $_SESSION['username'];
    $rating=$_POST[""];
    $feedback=$_POST[""];

    $sql="SELECT *FROM `user_feedback` WHERE `uname`='$username'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        echo "<script>window.location.href='userhome.php'; 
        alert('You have already given feedback');
        </script>"; 
    }
    else
    {
        $sql1="INSERT INTO `user_feedback` (`uname`,`rating`,`feedback`) VALUES ('$username','$rating','$feedback')";
        $result1=mysqli_query($conn,$sql1);
        if($result1)
        {
            echo "<script>window.location.href='userhome.php'; 
            alert('Thank you for your feedback');
            </script>"; 
        }
    }
?>