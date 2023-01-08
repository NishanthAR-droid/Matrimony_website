<?php require("db_connect.php");
session_start();
if (!isset($_SESSION['username'])) {
  header("location:home.php");
}
$username = $_SESSION['username'];
$sql = "SELECT *FROM `user_feedback` WHERE `uname`='$username'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
if ($count == 1) {
    echo "<script>window.location.href='userhome.php'; 
    alert('You have already given feedback');
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Feedback</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../CSS/Feedback.css" />
    <link rel="stylesheet" href="../CSS/Matches.css" />
  </head>
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
              <li></li>
              <li></li>
              <li></li>
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
          <li><a href="userAboutUs.php">About us</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
    <div class="container-form">
      <form action="uploadFeedback.php" method="post" class="feedback-form">
        <div class="input">
          <label for="Feedback">Give your feedback</label><br />
          <textarea
            name="feedback"
            id="textarea"
            cols="100"
            rows="10"
            placeholder="Give feedback"
          ></textarea>
          <div class="input">
            <label for="Give rating">Give rating</label>
          </div>
        </div>
        <div class="rating">
          <label>
            <input type="radio" name="rating" value="1" />
            <span class="icon">★</span>
          </label>
          <label>
            <input type="radio" name="rating" value="2" />
            <span class="icon">★</span>
            <span class="icon">★</span>
          </label>
          <label>
            <input type="radio" name="rating" value="3" />
            <span class="icon">★</span>
            <span class="icon">★</span>
            <span class="icon">★</span>
          </label>
          <label>
            <input type="radio" name="rating" value="4" />
            <span class="icon">★</span>
            <span class="icon">★</span>
            <span class="icon">★</span>
            <span class="icon">★</span>
          </label>
          <label>
            <input type="radio" name="rating" value="5" />
            <span class="icon">★</span>
            <span class="icon">★</span>
            <span class="icon">★</span>
            <span class="icon">★</span>
            <span class="icon">★</span>
          </label>
        </div>
        <button type="submit" name="submit">Submit</button>
      </form>
    </div>
  </body>
  <script>
    $(":radio").change(function () {
      console.log("New star rating: " + this.value);
    });
  </script>
</html>
