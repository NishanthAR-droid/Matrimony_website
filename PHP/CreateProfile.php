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
  <h1 id="title">Catch your <span class="Title"> match </span></h1>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create profile</title>
</head>
<link rel="stylesheet" href="../CSS/CreateProfile.css" />

<body>
  <section class="container">
    <header><b>Create Profile</b></header>
    <form action="UploadProfileDetails.php" method="post" class="CreateProfile" id="CreateProf">
      <div class="details personal">
        <span class="title"> Personal Details</span>
        <div class="fields">
          <div class="form--input" id="Fullname">
            <label for="Name">Full Name</label>
            <input type="text" name="name" class="form-input" placeholder="Enter full name" required />
          </div>
          <!-- <div class="form--input">
              <label for="email">Email</label>
              <input
                type="email"
                name="email"
                placeholder="123@gmail.com"
                class="form-input"
                required
              />
            </div> -->
          <div class="form--input" id="DateOfBirth">
            <label for="DateOfBirth">Date of birth</label>
            <input type="date" name="dateofbirth" class="form-input" min="1950-12-31" max="2020-12-31" required />
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
            <label for="Mother_toungue">Mother Toungue</label>
            <input type="text" name="mother_toungue" class="form-input" placeholder="Enter your mother toungue"
              required />
          </div>

          <div class="form--input">
            <label for="Religion"> Religion </label>
            <input type="text" name="religion" class="form-input" placeholder="Enter your Religion" required />
          </div>
          <div class="form--input">
            <label for="caste">Caste</label>
            <input type="text" name="caste" class="form-input" placeholder="Enter your caste" required />
          </div>
        </div>
      </div>
      <div class="details ID">
        <span class="title">Other Details</span>
        <div class="fields">
          <div class="form--input">
            <label for="City">City</label>
            <input type="text" name="City" class="form-input" placeholder="Enter your city" required />
          </div>
          <div class="form--input">
            <label for="state">State</label>
            <input type="text" name="state" class="form-input" placeholder="Enter your state" required />
          </div>
          <div class="form--input">
            <label for="country">Country</label>
            <input type="text" name="country" class="form-input" placeholder="Enter your country" required />
          </div>
          <div class="form--input">
            <label for="education">Education</label>
            <input type="text" name="education" class="form-input" placeholder="Enter your qualification" required />
          </div>

          <div class="form--input">
            <label for="Annual income">Annual Income</label>
            <input type="text" name="annual_income" class="form-input" placeholder="Enter your annual income"
              required />
          </div>
          <div class="form--input">
            <label for="Occupation">Occupation</label>
            <input type="text" name="occupation" class="form-input" placeholder="Enter your occupation" required />
          </div>
          <div class="form--input" id="AboutMe">
            <label for="About me">About me</label>
            <textarea name="aboutme" id="textarea" class="form-input" cols="90" rows="5"
              placeholder="Tell about yourself......"></textarea>
          </div>
          <div class="form--input">
            <label for="Image">Upload your picture</label>
            <input type="file" name="image" class=form-input>
          </div>
        </div>
      </div>
      <button type="submit" name="submit" class="submitBUtton">Submit</button>
    </form>
  </section>
</body>

</html>