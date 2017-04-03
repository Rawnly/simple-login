<?php
  session_start();
  // $username = $_SESSION["logged-username"];
  if ( isset($_SESSION["logged-username"]) ) {
    header("Location: welcome.php");
  } else {
    include_once "../helpers/db.php"
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Log In | T&amp;L </title>
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>
    <nav class="navbar">
      <div class="buttons">
        <a href="login.php" class="login">Sign In </a> <span class="separator"></span> <a href="register.php" class="signup">Sign Up</a>
      </div>

      <a href="../index.php" class="home">Home</a>
    </nav>

    <form class="form" action="../helpers/check.php" method="post">
      <input required type="text" name="username" placeholder="username"> <br>
      <input required type="password" name="password" placeholder="password"> <br>
      <input type="submit" name="submit-btn">
    </form>
    <footer>
      <div <?php echo "class='status $class'"; ?> ></div>
    </footer>
  </body>
</html>

<?php } ?>
