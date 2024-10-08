
<?php 
require "includes/header.php";
?>

<main>
  <div class="wrapper-main">
    <section class="section-default">
        <h1>Signup</h1>
        <?php
          if(isset($_GET["error"])){
            if($_GET["error"] == "emptyfields") {
              echo '<p class="signuperror">Fill in all fields!</p>';
            }
            else if ($_GET["error"] == "invalidmailuid"){
              echo '<p class="signuperror">Invalid username and email!</p>';
            }
            else if ($_GET["error"] == "invalidmail"){
              echo '<p class="signuperror">Invalid email!</p>';
            }
            else if ($_GET["error"] == "invaliduid"){
              echo '<p class="signuperror">Invalid Username!</p>';
            }
            else if ($_GET["error"] == "passwordcheck"){
              echo '<p class="signuperror">Your passwords do not match up!</p>';
            }
            else if ($_GET["error"] == "usertaken"){
              echo '<p class="signuperror">This username is already taken!</p>';
            }
          }
          else if($_GET["signup"] == "success") {
            echo '<p class="signupsuccess">Signup successful!</p>';
          }
        ?>
        <form class="form-signup" action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat Password">
            <button type="submit" name="signup-submit">Signup</button>
        </form>
    </section>
  </div>
</main>

