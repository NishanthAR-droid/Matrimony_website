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
        <li><a href="logout.php" onclick="return confirm('Do you want to logout?')">Logout</a></li>
      </ul>
    </nav>
  </div>
  <div class="container-form">
    <form action="uploadFeedback.php" method="post" class="feedback-form">
      <div class="input">
        <label for="Feedback">Give your feedback</label><br />
        <textarea name="feedback" id="textarea" cols="100" rows="10" placeholder="Give feedback"></textarea><br>
        <label for="Give rating" id="demo">Give rating</label>
        <div class="rating">
          <input id="demo-1" type="radio" name="rating" value="1">
          <label for="demo-1">1 star</label>
          <input id="demo-2" type="radio" name="rating" value="2">
          <label for="demo-2">2 stars</label>
          <input id="demo-3" type="radio" name="rating" value="3">
          <label for="demo-3">3 stars</label>
          <input id="demo-4" type="radio" name="rating" value="4">
          <label for="demo-4">4 stars</label>
          <input id="demo-5" type="radio" name="rating" value="5">
          <label for="demo-5">5 stars</label>

          <div class="stars">
            <label for="demo-1" aria-label="1 star" title="1 star"></label>
            <label for="demo-2" aria-label="2 stars" title="2 stars"></label>
            <label for="demo-3" aria-label="3 stars" title="3 stars"></label>
            <label for="demo-4" aria-label="4 stars" title="4 stars"></label>
            <label for="demo-5" aria-label="5 stars" title="5 stars"></label>
          </div>
        </div>
      </div>

      <button type="submit" name="submit">Submit</button>
    </form>
  </div>
</body>
<script>
  (function () {
    var rating = document.querySelector('.rating');
    var handle = document.getElementById('toggle-rating');
    handle.onchange = function (event) {
      rating.classList.toggle('rating', handle.checked);
    };
  }());
</script>

</html>