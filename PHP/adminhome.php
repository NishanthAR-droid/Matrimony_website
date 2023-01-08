<?php require("db_connect.php");
session_start();
if (!isset($_SESSION['username'])) {
  header("location:home.php");
}
else {
    $username = $_SESSION['username'];
    $sql="SELECT * FROM `user_details`";
    $result=mysqli_query($conn,$sql);
    $i=1;
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
    <title>Matches</title>
    <link rel="stylesheet" href="../CSS/adminHome.css" />
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
          <li><a href="adminhome.php">Home</a></li>
          <li><a href="#">View Feedback</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
    <div class="heading">Total Users</div>
    <div class="table_responsive">
      <table>
        <thead>
          <tr>
            <th>Sl no</th>
            <th>Image</th>
            <th>Full Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php while($row=mysqli_fetch_assoc($result)) {
              $profile=$row['uname']; ?> 
          <tr>
            <td><?php echo $i; $i++; ?></td>
            <td>
            <?php $sql1="SELECT *FROM `image_gallery` WHERE `uname`='$profile'";
                    $result1=mysqli_query($conn,$sql1);
                    $row1=mysqli_fetch_assoc($result1);
                    $image=$row1['image'];
                    echo '<img src="data:image;base64,'.base64_encode($image).'" alt="Image" style="width: 100px;height: 100px;">' 
                    ?>
            </td>
            <td><?php echo $row['fname'] ?></td>
            <td>
              <span class="action_button">
              <?php echo "<a href=\"admin_view_profile.php?id=$profile\">View Profile</a>";
               echo "<a href=\"admin_delete_profile.php?id=$profile\">Delete Profile</a>"?>
              </span>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
