<?php
  error_reporting(E_ALL);
  session_start();
  include_once "db.php";

  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM Login WHERE username='$username' and password='$password'";
  $result = $conn->query($sql);

  if ($result) {
    $row = $result->fetch_assoc();
    $count=$result->num_rows;
  }


  if (isset($count) && $count == 1) {
    $_SESSION["logged-username"] = $username;
    $_SESSION["generals"] = $row;
    header("Location: ../pages/welcome.php");
  } else {
    header("Location: ../pages/error.php");
  }
?>
