<?php include("db_connect.php");
    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $passwd=$_POST['password'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $sql="INSERT INTO `USER_LOGIN` VALUES('$username','$passwd')";
        $sql1="INSERT INTO `USER_DETAILS`(`email`,`phno`,`uname`) VALUES('$email','$phone','$username')";
        $result=mysqli_query($conn,$sql);
        $result1=mysqli_query($conn,$sql1);
    }
?>