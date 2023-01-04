<?php require("db_connect.php");?>
<!DOCTYPE html>
<html lang="en">
  <style></style>
  <link rel="stylesheet" href="../CSS/login.css" />
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <h1 id="title">Catch your <span class="Title"> match </span></h1>
    </div>
    <div class="Login">
      <form action="" method="post" class="loginHeading" id="Login">
        <h1 class="loginHeading">Login</h1>
        <div class="form--input">
          <label class="form--input"> Username </label>
          <input
            type="text"
            name="username"
            placeholder="Enter your username"
            class="form-input"
          />
        </div>
        <div class="form--input">
          <label class="form--input"> Password </label>
          <input
            type="password"
            name="password"
            placeholder="Enter your password"
            class="form-input"
          />
        </div>
        <button type="button"><a href="">Submit</a></button>
      </form>
    </div>
  </body>
</html>