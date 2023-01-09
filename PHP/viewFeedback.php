<?php require("db_connect.php");
session_start();
if (!isset($_SESSION['username'])) {
    header("location:home.php");
} else {
    $username = $_SESSION['username'];
    $i = 1;
    $sql1= "SELECT * FROM `USER_FEEDBACK` ORDER BY `rating` DESC" ;
    $result1 = mysqli_query($conn, $sql1);
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
    <title>Feedbacks</title>
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
                <li><a href="viewFeedback.php">View Feedback</a></li>
                <li><a href="logout.php" onclick="return confirm('Do you want to logout?')">Logout</a></li>
            </ul>
        </nav>
    </div>
    <div class="heading">Feedback given</div>
    <div class="table_responsive">
        <table>
            <thead>
                <tr>
                    <th>Sl no</th>
                    <th>Full Name</th>
                    <th>Feedback</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row1 = mysqli_fetch_assoc($result1)) {
                    $uname = $row1['uname'];
                    $sql = "SELECT * FROM `user_details` WHERE `uname`='$uname' ORDER BY `fname`";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                     ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['fname'] ?></td>
                        <td><?php echo $row1['feedback']?></td>
                        <td><?php echo $row1['rating']?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>