<?php
    include("db_connect.php");
    session_start();
    if (isset($_SESSION['username'])) {
        session_unset();
        session_destroy();
        echo "<script>window.location.href='home.php';
                      alert('You have logged out successfully');
                      </script>";
      }
      else
      {
        header("location:home.php");
      }
?>