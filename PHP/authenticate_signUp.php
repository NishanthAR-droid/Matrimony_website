<?php include("db_connect.php");
    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $passwd=$_POST['password'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $sql0="SELECT `uname` FROM `USER_LOGIN` WHERE `uname`='$username'";
        $result0=mysqli_query($conn,$sql0);
        $count=mysqli_num_rows($result0);
        if ($count==1)
        {
            echo "<script>window.location.href='home.php';
                  alert('username already exists');
                  </script>";
        }
        else
        {
            $sql="INSERT INTO `USER_LOGIN` VALUES('$username','$passwd')";
            $sql1="INSERT INTO `USER_DETAILS`(`email`,`phno`,`uname`) VALUES('$email','$phone','$username')";
            $result=mysqli_query($conn,$sql);
            $result1=mysqli_query($conn,$sql1);
            if($result && $result1)
            {
                session_start();
                $_session['username']=$username;
                header("location: CreateProfile.php");

            }
        }
    }
?>