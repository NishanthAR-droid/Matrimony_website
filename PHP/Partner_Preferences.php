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
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:ital,wght@1,500&display=swap"
    rel="stylesheet" />
  <h1 id="title">
    <img id="logo" src="../Images/IMG_20230106_213725.png" alt="" />
    Catch your
    <span class="Title"> match </span>
  </h1>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>
<link rel="stylesheet" href="../CSS/PartnerPreferences.css" />

<body>
  <div class="container">
    <header><b>Partner Preference</b></header>
    <form action="UploadPreferences.php" method="post" class="ParnetPreferences">
      <div class="fields">
        <div class="form--input">
          <label for="age"> Age </label>
          <select name="age" id="age" class="form-input">
            <option value="18 to 22">18 to 22</option>
            <option value="23 to 27">18 to 27</option>
            <option value="28 to 35">28 to 35</option>
            <option value="above 35">Above 35</option>
          </select>
        </div>
        <div class="form--input">
          <div class="sex">
            <label for="Sex">Sex</label>
            <div class="sex-option">
              <input type="radio" class="form-input" name="sex" value="M" />

              <label for="Male" class="form-input" id="checkmale">Male</label>
            </div>
            <div class="sex-option">
              <input type="radio" class="form-input" name="sex" value="F" id="checkfemale" />
              <label for="Female" class="form-input">Female</label>
            </div>
            <div class="sex-option">
              <input type="radio" class="form-input" name="sex" value="O" id="checkothers" />
              <label for="Others" class="form-input">Others</label>
            </div>
          </div>
        </div>
        <div class="form--input">
          <label for="AnnualIncome"> Annual Income </label>
          <select name="AnnualIncome" id="AnnualIncome" class="form-input">
            <option value="below 3 lakh">below 3 lakh</option>
            <option value="3 to 6 lakhs">3 to 6 lakhs</option>
            <option value="6 to 10 lakhs">6 to 10 lakhs</option>
            <option value="above 10 lakhs">Above 10 lakhs</option>
          </select>
        </div>
        <div class="form--input">
          <label for="caste">Caste</label>
          <input type="text" name="caste" class="form-input" placeholder="Enter caste" />
        </div>
        <div class="form--input">
          <label for="City">City</label>
          <input type="text" name="city" class="form-input" placeholder="Enter city" />
        </div>
        <div class="form--input">
          <label for="religion">Religion</label>
          <input type="text" name="religion" class="form-input" placeholder="Enter religion" />
        </div>
        <div class="form--input">
          <label for="country">Country</label>
          <input type="text" name="country" class="form-input" placeholder="Enter country" />
        </div>
        <div class="form--input">
          <label for="state">State</label>
          <input type="text" name="state" class="form-input" placeholder="Enter state" />
        </div>
        <div class="form--input">
          <label for="mother_toungue">Mother Toungue</label>
          <input type="text" name="mother_toungue" class="form-input" placeholder="Enter mother toungue" />
        </div>
        <button type="submit" name="submit" class="submitBUtton">Submit</button>
      </div>
    </form>
  </div>
</body>

</html>