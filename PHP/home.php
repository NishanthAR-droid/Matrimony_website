<!-- <?php require("db_connect.php");
session_start();
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<link rel="stylesheet" href="../CSS/home.css">

<body>
    <h1 id="title">
        <img id="logo" src="../Images/IMG_20230106_213725.png" alt="" />
        Catch your
        <span class="Title"> match </span>
    </h1>
    <div class="container">
        <nav>
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="adminlogin.php">Admin login</a></li>
                <li><a href="aboutUs.php">About Us</a></li>                
            </ul>
        </nav>
    </div>
    <div class="ImageContainer">
        <img src="../Images/Holding hands.jpeg" alt="">
    </div>

    <div class="text">Supporting all forms of love &#128151 &#128107 &#128108 &#128109 &#128151
    </div>
    <div class="Sign-up">
        <form action="authenticate_signUp.php" method="post" class="SignUpHeading">
            <h1 class="SignUpHeading"> Sign Up </h1>
            <div class="form--input">
                <label for="Username" class="form--input">Username</label>
                <input type="text" name="username" class="form-input" placeholder="Create username" required>
            </div>
            <div class="form--input">
                <label for="email" class="form--input">Email</label>
                <input type="Email" name="email" class="form-input" placeholder="123@gmail.com" required>
            </div>
            <div class="form--input">
                <label for="Phone number" class="form--input">Phone Number</label>
                <input type="text" name="phone" class="form-input" placeholder="Enter your phone number">
            </div>
            <div class="form--input">
                <label for="password" class="form--input">Password</label>
                <input type="password" name="password" placeholder="Create password" class="form-input" required>
            </div>
            <button type="submit" name="submit" class="form-button">Click here to create profile</button>
        </form>
    </div>
</body>

</html>