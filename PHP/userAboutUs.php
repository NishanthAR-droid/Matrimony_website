<?php require("db_connect.php");
session_start();
if (!isset($_SESSION['username'])) {
  header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../CSS/AboutUs.css" />
  <link rel="stylesheet" href="../CSS/Matches.css" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
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
        <li><a href="notification.php">Notifications</a></li>
        <li><a href="logout.php" onclick="return confirm('Do you want to logout?')">Logout</a></li>
      </ul>
    </nav>
  </div>
  <div class="Profile">
    <div class="left">
      <h1 class="para">About Us</h1>
      <p class="para">
        We are a matrimonial website dedicated to serving all individuals including the LGBTQ community. Our goal is to
        create a safe and inclusive platform where members of the LGBTQ community can connect and find meaningful
        relationships.
      </p>
      <p class="para">
        With a user-friendly interface and advanced search options, we make it easy for you to find compatible partners
        who share your values and preferences.
      </p>
      <p class="para">
        At Catch Your Match! , we believe that love knows no gender, and we are committed to promoting acceptance and
        equality for individuals. Our platform is open to individuals of all sexual orientations and gender identities,
        and we welcome everyone with open arms.
      </p>
      <p class="para">
        Whether you're looking for friendship, a casual relationship, or a lifelong partner, we are here to help you
        find what you're looking for. Join us today and start your journey towards finding love and happiness!
      </p>
    </div>
</body>

</html>