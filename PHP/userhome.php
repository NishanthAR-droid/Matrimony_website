<?php require("db_connect.php");
session_start();
if (!isset($_SESSION['username'])) {
  header("location:home.php");
}
else {
    $username = $_SESSION['username'];
    $sql="SELECT * FROM `user_details` where `uname`='$username'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $sql1="SELECT * FROM `image_gallery` where `uname`='$username'";
    $result1=mysqli_query($conn,$sql1);
    $row1=mysqli_fetch_assoc($result1);
    $image=$row1['image'];
    $fullname=$row['fname'];
    $about_me=$row[];
    $email=$row['email'];
    $sex=$row['sex'];
    $religion=$row['religion'];
    $caste=$row['caste'];
    $mother_tongue=$row['mother_tongue'];
    $city=$row['city'];
    $state=$row['state'];
    $country=$row['country'];
    $education=$row['education'];
    $annual_income=$row['annual_income'];
    $occupation=$row['occupation'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Profile</title>
  </head>
  <link rel="stylesheet" href="../CSS/UserProfile.css" />
  <body>
    <h1 id="title">
      <img id="logo" src="../Images/IMG_20230106_213725.png" alt="" />
      Catch your
      <span class="Title"> match </span>
    </h1>
    <div class="container">
      <nav>
        <ul>
          <li><a href="userhome.php">Home</a></li>
          <li><a href="#">Matches</a></li>
          <li><a href="logout.php">Logout</a></li>
          <li><a href="#">About us</a></li>
        </ul>
      </nav>
    </div>
    <div class="Profile">
      <div class="left">
        <img src="../Images/profile pic 2.jpeg" alt="" class="left" />
        <h1 class="left">Prajwal Surendra</h1>
        <p class="left">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident,
          maxime quia fuga laborum aliquam quo deserunt, sunt totam nostrum eum,
          non perspiciatis fugit quisquam distinctio. Debitis obcaecati ea sit
          doloremque nam odio, tempora, reiciendis error iste amet possimus,
          neque quo!
        </p>
      </div>
      <div class="right">
        <div class="details">
          <h2>Personal Details</h2>
          <div class="details-data">
            <div class="data">
              <p><b>Email:</b> prajwalsurendra7178@gmail.com</p>
              <p></p>
            </div>

            <div class="data">
              <p><b>Gender:</b> Male</p>
              <p></p>
            </div>

            <div class="data">
              <p><b>Religion:</b> Hindu</p>
            </div>

            <div class="data">
              <p><b>Caste:</b> Vishwakarma</p>
              <p></p>
            </div>

            <div class="data">
              <p><b>Mother Tongue:</b> Kannada</p>
              <p></p>
            </div>
          </div>
          <h2>Other Details</h2>
          <div class="details-data">
            <div class="data">
              <p><b>City:</b> Bengaluru</p>
              <p></p>
            </div>

            <div class="data">
              <p><b>State:</b> Karnataka</p>
              <p></p>
            </div>

            <div class="data">
              <p><b>Country:</b> India</p>
            </div>
            <div class="data">
              <p><b>Education:</b> BE</p>
            </div>
            <div class="data">
              <p><b>Income:</b> 10</p>
            </div>
            <div class="data">
              <p><b>Occupation:</b> fdnjfkd</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
