<?php
  session_start();
  include_once "../helpers/db.php";

  if ($conn->connect_error) {
?>

  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <title> Fail | T&amp;L </title>
    <link rel="stylesheet" href="../css/welcome.css">
  </head>

  <body>
    <nav class="navbar">
      <div class="buttons">
        <a href="login.php" class="login">Sign In </a> <span class="separator"></span> <a href="register.php" class="signup">Sign Up</a>
      </div>

      <a href="../index.php" class="home">Home</a>
    </nav>

    <footer>
      <div <?php echo "class='status $class'"; ?> ></div>
    </footer>
  </body>

  </html>
  <?php } else { header("Location: ../index.php"); } ?>