<?php
include("db_connect.php");
session_start();
if (isset($_POST["submit"])) {
    $image=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $username = $_SESSION['username'];
    $fullname = $_POST["name"];
    $dateofbirth = $_POST["dateofbirth"];
    $sex = $_POST["sex"];
    $mother_toungue = $_POST["mother_toungue"];
    $religion = $_POST["religion"];
    $caste = $_POST["caste"];
    $city = $_POST["City"];
    $state = $_POST["state"];
    $country = $_POST["country"];
    $education = $_POST["education"];
    $annual_income = $_POST["annual_income"];
    $occupation = $_POST["occupation"];
    $about_me = $_POST["aboutme"];
    $sql = "UPDATE `USER_DETAILS` SET `fname`='$fullname',`sex`='$sex',`mother_tongue`='$mother_toungue',
           `religion`='$religion',`caste`='$caste',`country`='$country',`city`='$city',`state`='$state',
           `education`='$education',`annual_income`='$annual_income',`about_me`='$about_me',`occupation`='$occupation',
           `dob`='$dateofbirth',`age`=TIMESTAMPDIFF(YEAR,'$dateofbirth',CURDATE()) WHERE `uname`='$username'";
    $result = mysqli_query($conn, $sql);
    $sql1="INSERT INTO `image_gallery` (`uname`,`image`) values ('$username','$image')";
    $result1= mysqli_query($conn,$sql1);
    if ($result && $result1)
        header("location:Partner_Preferences.php");
}
?>