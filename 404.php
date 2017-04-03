<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>404 Not Found</title>
    
    <?php 
      if (isset($_SESSION["logged-user"])) {
    ?>
    
    <link rel="stylesheet" href="css/welcome.css">
    
    <?php
      } else {
    ?>
    
    <link rel="stylesheet" href="css/index.css">
    
    <?php
      }
    ?>

    <style media="screen">
      .not-found {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(2);
      }
      .not-found h1,
      .not-found h3 {
        margin: 5px;
        padding: 0;
      }
    </style>
  </head>
  <body>

    <?php 
      if ( isset($_SESSION["logged-user"]) ) {
    ?>
    
    <nav class="navbar">
      <span class="username"> Logged as <span class="user"> <?php echo $_SESSION["logged-username"] ?>  </span> </span>
      <a href="../helpers/logout.php" class="signout"> Sign Out </a>
    </nav>
    
    <?php 
      } else { 
    ?>

    <nav class="navbar">
      <div class="buttons">
        <a href="pages/login.php" class="login">Sign In </a> <span class="separator"></span> <a href="pages/register.php" class="signup">Sign Up</a>
      </div>
    </nav>

    <?php 
      }
    ?>

    <div class="not-found">
      <h1 align="center"> Error 404 </h1>
      <h3 align="center"> Not Found </h3>
    </div>
  </body>
</html>
