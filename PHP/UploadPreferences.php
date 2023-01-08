<?php
include("db_connect.php");
session_start();
if (isset($_POST["submit"])) {
    $username = $_SESSION['username'];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $annual_income = $_POST["AnnualIncome"];
    $caste = $_POST["caste"];
    $city = $_POST["city"];
    $religion = $_POST["religion"];
    $country = $_POST["country"];
    $state = $_POST["state"];
    $mother_toungue = $_POST["mother_toungue"];
    switch ($age) {
        case '18 to 22':
            $minage=18;
            $maxage=22;
            break;
        
        case '23 to 27':
            $minage=23;
            $maxage=27;
            break;
        
        case '28 to 35':
            $minage=28;
            $maxage=35; 
            break;
            
        case 'above 35':
            $minage=35;
            $maxage=70;
            break;
    }
    switch ($annual_income) {
        case 'below 3 lakh':
            $minincome=0;
            $maxincome=300000;
            break;
        
        case '3 to 6 lakhs':
            $minincome=300000;
            $maxincome=600000;
            break;
        
        case '6 to 10 lakhs':
            $minincome=600000;
            $maxincome=1000000; 
            break;
            
        case 'above 10 lakhs':
            $minincome=1000000;
            $maxincome=10000000;
            break;
    }
    $sql = "INSERT INTO `user_preferences` (`uname`,`sex`,`minage`,`maxage`,`min_annual_income`,`max_annual_income`,`caste`,`religion`,`country`,`state`,`city`,`mother_tongue`) values ('$username','$sex','$minage','$maxage','$minincome','$maxincome','$caste','$religion','$country','$state','$city','$mother_toungue')";
    $result = mysqli_query($conn, $sql);
    if ($result)
        header("location:userhome.php");
}
?>