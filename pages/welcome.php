<?php
  session_start();
  if (!isset($_SESSION["logged-username"])) {
    header("Location: denied.html");
  } else {
    $user = $_SESSION["logged-username"];
    $r = $_SESSION["generals"];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Welcome | T&L </title>
    <link rel="stylesheet" href="../css/welcome.css">
  </head>
  <body>
    <nav class="navbar">
      <span class="username"> Logged as <span class="user"> <?php echo $_SESSION["logged-username"] ?>  </span> </span>
      <a href="../helpers/logout.php" class="signout"> Sign Out </a>
    </nav>
    <h1 align="center"> Dashboard </h1>
  </body>
</html>
<?php } ?>
