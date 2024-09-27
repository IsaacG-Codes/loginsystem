<?php
include_once 'dbh.inc.php';

$first = $_POST['First'];
$last = $_POST['Last'];
$email = $_POST['Email'];
$username = $_POST['username'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO users (user_first, user_last, user_email, user_username, user_pwd) 
VALUES ('$first', '$last', '$email','$username', '$pwd');";
mysqli_query($conn, $sql);

header("Location: ../index.php?signup=success");
?>