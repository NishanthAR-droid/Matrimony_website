<?php
include("db_connect.php");
session_start();
if (isset($_POST["submit"])) {
    // $username=$_POST["username"];
    $username = $_SESSION['username'];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $annual_income = $_POST["annual_income"];
    $caste = $_POST["caste"];
    $city = $_POST["City"];
    $religion = $_POST["religion"];
    $country = $_POST["country"];
    $state = $_POST["state"];
    $mother_toungue = $_POST["mother_toungue"];
    $sql = "UPDATE `USER_DETAILS` SET  WHERE `uname`='$username'";
    $result = mysqli_query($conn, $sql);
    if ($result)
        header("location:Partner_Preferences.php");
}
?>