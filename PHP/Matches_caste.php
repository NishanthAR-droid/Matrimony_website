<?php require("db_connect.php");
session_start();
if (!isset($_SESSION['username'])) {
  header("location:home.php");
} else {
  $username = $_SESSION['username'];
  $sql = "SELECT * FROM `user_preferences` where `uname`='$username'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $i = 1;
  $caste = $row['caste'];
  $sex = $row['sex'];
  if ($sex == 'B') {
    $sql1 = "SELECT *FROM `user_details` WHERE `caste`= '$caste' AND `sex` IN ('M','F') AND `uname`<> '$username' ORDER BY `fname`";
    $result1 = mysqli_query($conn, $sql1);
    $count = mysqli_num_rows($result1);
  } else {
    $sql1 = "SELECT *FROM `user_details` WHERE `caste`= '$caste' AND `sex`='$sex' AND `uname`<> '$username' ORDER BY `fname`";
    $result1 = mysqli_query($conn, $sql1);
    $count = mysqli_num_rows($result1);
  }
  if ($count == 0) {
    echo "<script>window.location.href='userhome.php';
      alert('Oops,No matches found');
      </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Matches</title>
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
        <li><a href="notification.php">Notifications</a></li>
        <li><a href="logout.php" onclick="return confirm('Do you want to logout?')">Logout</a></li>
      </ul>
    </nav>
  </div>
  <div class="heading">Matches based on Caste</div>
  <div class="table_responsive">
    <table>
      <thead>
        <tr>
          <th>Sl no</th>
          <th>Image</th>
          <th>Full Name</th>
          <th>Caste</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row1 = mysqli_fetch_assoc($result1)) {
          $viewprofile = $row1['uname'];
          $sql0 = "SELECT *FROM `user_views` where `uname`='$viewprofile'";
          $result0 = mysqli_query($conn, $sql0);
          $row0 = mysqli_fetch_assoc($result0);
          $search = $row0['search'];
          $search += 1;
          $sql3 = "UPDATE `user_views` SET `search`='$search' where `uname`='$viewprofile'";
          $result3 = mysqli_query($conn, $sql3); ?>
          <tr>
            <td><?php echo $i;
            $i++; ?></td>
            <td>
              <?php $sql2 = "SELECT *FROM `image_gallery` WHERE `uname`='$viewprofile'";
              $result2 = mysqli_query($conn, $sql2);
              $row2 = mysqli_fetch_assoc($result2);
              $image = $row2['image'];
              echo '<img src="data:image;base64,' . base64_encode($image) . '" alt="Image" style="width: 100px;height: 100px;">'
                ?>
            </td>
            <td><?php echo $row1['fname'] ?></td>
            <td>
              <?php echo $row1['caste'] ?>
            </td>
            <td>
              <span class="action_button">
                <?php echo "<a href=\"view_profile.php?id=$viewprofile\">View Profile</a>" ?>
              </span>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>

</html>