<?php
    include("db_connect.php");
    session_start();
    $username = $_SESSION['username'];
    $sql="SELECT *FROM `image_gallery` WHERE `uname`='$username'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 200px;height: 200px;">';
?>