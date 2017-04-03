<?php
  session_start();
  // $username = $_SESSION["logged-username"];
  if ( isset($_SESSION["logged-username"]) ) {
    header("Location: pages/welcome.php");
  } else {
    include_once "helpers/db.php"
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Home | T&L </title>
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <nav class="navbar">
      <div class="buttons">
        <a href="pages/login.php" class="login">Sign In </a> <span class="separator"></span> <a href="pages/register.php" class="signup">Sign Up</a>
      </div>
    </nav>

    <header class="cover">

    </header>

    <footer>
      <div <?php echo "class='status $class'"; ?> ></div>
    </footer>
  </body>
</html>

<?php } ?>
