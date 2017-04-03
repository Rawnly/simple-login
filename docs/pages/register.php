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
    <title> Register | T&L </title>
    <link rel="stylesheet" href="../css/register.css">
  </head>
  <body>
    <nav class="navbar">
      <div class="buttons">
        <a href="login.php" class="login">Sign In </a> <span class="separator"></span> <a href="register.php" class="signup">Sign Up</a>
      </div>
      <a href="../index.php" class="home">Home</a>

    </nav>
    <?php
      $email    = $_POST["email"];
      $username = $_POST["username"];
      $password = $_POST["password"];
      $sub = $_POST["submit-btn"];

      if ( isset($sub) && $class == "online") {
        $sql = "INSERT INTO Login (email, username, password) VALUES ('$email', '$username', '$password')";

        if (!$conn->query($sql)) {
          $record_error = "<h3 align='center'> Record Error " . mysqli_error($conn)  . "</h3>";
        } else {
          $style = "border-color: green, color: green;";
        }
      }

      if (!$conn->connect_error) {
        $conn->close();
      }
    ?>

    <form class="form" action="register.php" method="post">
      <input <?php echo "style='$style'" ?> required type="email" name="email" placeholder="email"> <br>
      <input <?php echo "style='$style'" ?> required type="text" name="username" placeholder="username"> <br>
      <input <?php echo "style='$style'" ?> required type="password" name="password" placeholder="password"> <br>
      <input type="submit" name="submit-btn">
    </form>

    <br>
    <br>

    <span> <?php if (isset($record_error)) { echo $record_error; } ?> </span>

    <footer>
      <div <?php echo "class='status $class'"; ?> ></div>
    </footer>

  </body>
</html>

<?php } ?>
