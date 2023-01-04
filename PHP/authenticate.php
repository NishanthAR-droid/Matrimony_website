<?php include("db_connect.php");
    $sql="INSERT INTO `USER_LOGIN` VALUES('ADMIN','ADMIN')";
    $result=mysqli_query($conn,$sql);
    if($result)
        echo "Query executed";
    else
        echo "Query not executed";
?>