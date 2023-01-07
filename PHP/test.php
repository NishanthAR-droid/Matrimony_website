<?php
include("db_connect.php");
session_start();
$sql="SELECT *FROM `user_login`";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
echo $count;
for($i=1;$i<=$count;$i++)
{
    $row=mysqli_fetch_assoc($result);
    echo "<br>".$row["uname"] ."\t\t\t" . $row["passwd"] ."\n";

}
?>