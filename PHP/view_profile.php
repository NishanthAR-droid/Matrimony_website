<?php require("db_connect.php");
session_start();
if (!isset($_SESSION['username'])) {
  header("location:home.php");
}
else {
    $username = $_GET['id'];
    $sql="SELECT * FROM `user_details` where `uname`='$username'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $sql1="SELECT * FROM `image_gallery` where `uname`='$username'";
    $result1=mysqli_query($conn,$sql1);
    $row1=mysqli_fetch_assoc($result1);
    $image=$row1['image'];
    $fullname=$row['fname'];
    $about_me=$row['about_me'];
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
    $dob=$row['dob'];
    $age=$row['age'];
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
  <link rel="stylesheet" href="../CSS/Matches.css" />
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
          <li class="navbar">
            <a href="#">Matches</a>
            <ul>
              <li><a href="Matches_income.php">Based on Income</a></li>              
              <li><a href="Matches_caste.php">Based on Caste</a></li>
              <li><a href="Matches_religion.php">Based on Religion</a></li>
              <li><a href="Matches_motherTongue.php">Based on Mother Tongue</a></li>
              <li><a href="Matches_age.php">Based on Age</a></li>
              <li><a href="Matches_city.php">Based on City</a></li>
              <li><a href="Matches_state.php">Based on State</a></li>
              <li><a href="Matches_country.php">Based on Country</a></li>  
            </ul>
          </li>
          <li><a href="Feedback.php">Feedback</a></li>
          <li><a href="aboutUs.php">About us</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
    <div class="Profile">
      <div class="left">
      <?php echo '<img src="data:image;base64,'.base64_encode($image).'" alt="Image" style="width: 400px;height: 400px;">' ?>
        <h1 class="left"><?php echo $fullname ?></h1>
        <p class="left">
          <?php echo $about_me ?>
        </p>
      </div>
      <div class="right">
        <div class="details">
          <h2>Personal Details</h2>
          <div class="details-data">
            <div class="data">
              <p><b>Email:</b> <?php echo $email ?></p>
              <p></p>
            </div>

            <div class="data">
              <p><b>Gender:</b> <?php echo $sex ?></p>
              <p></p>
            </div>

            <div class="data">
              <p><b>Religion:</b> <?php echo $religion ?></p>
            </div>

            <div class="data">
              <p><b>Caste:</b> <?php echo $caste ?></p>
              <p></p>
            </div>

            <div class="data">
              <p><b>Age:</b> <?php echo $age ?></p>
              <p></p>
            </div>

            <div class="data">
              <p><b>Date of Birth:</b> <?php echo $dob ?></p>
              <p></p>
            </div>

            <div class="data">
              <p><b>Mother Tongue:</b> <?php echo $mother_tongue ?></p>
              <p></p>
            </div>
          </div>
          <h2>Other Details</h2>
          <div class="details-data">
            <div class="data">
              <p><b>City:</b> <?php echo $city ?></p>
              <p></p>
            </div>

            <div class="data">
              <p><b>State:</b> <?php echo $state ?></p>
              <p></p>
            </div>

            <div class="data">
              <p><b>Country:</b> <?php echo $country ?></p>
            </div>
            <div class="data">
              <p><b>Education:</b> <?php echo $education ?></p>
            </div>
            <div class="data">
              <p><b>Income:</b> <?php echo $annual_income ?></p>
            </div>
            <div class="data">
              <p><b>Occupation:</b> <?php echo $occupation ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
