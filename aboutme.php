<?php 
  require "includes/header.php";
?>
<html>
<head><title>about me</title></head>

  <main>
    <div class="wrapper-main">
      <section class="section-default">
        <?php
          if(isset($_SESSION['userId'])){
            echo '<p class="login-status">You are logged in!</p>';
          } else {
            echo '<p class="login-status">You are logged out!</p>';
          }
        ?>

      </section>
    </div>
  </main>
</html>