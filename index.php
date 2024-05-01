<?php
session_start();

// Check if user is authenticated.
// If not, send them to login.php using header()...
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Pushpak Roy</title>
  </head>

  <body>

      <h1>Assignment 1</h1>

      <p> Welcome, <?=$_SESSION['username'] ?></p>
    
  </body>
</html>