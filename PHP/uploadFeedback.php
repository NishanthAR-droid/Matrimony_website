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
    if()
?>