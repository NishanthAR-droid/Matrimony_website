<?php
include("db_connect.php");
session_start();
$sql="SELECT *FROM `user_login`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
    
    echo "<br>".$row["uname"] ."      " . $row["passwd"] ."\n";

}
?>