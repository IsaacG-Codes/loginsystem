<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" >
  </head>
<body>
  <header>
    <nav class="nav-header-main">
      <a class="header-logo" href="index.php">
        <img src="img/logo.png" alt="logo">
      </a>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Portfolio</a></li>
      <li><a href="#">About me</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
      <div class="header-login">
        <form action="includes/login.inc.php" method="POST">
        <input type="text" name="mailuid" placeholder="Username/E-mail...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="login-submit">Login</button>

      </form>
      <a href="signup.php">Signup</a>
      <form action="includes/signup.inc.php" method="POST">
        <button type="submit" name="logout-submit">Logout</button>
      </div>
    </nav>
  </header>

</body>
</html>