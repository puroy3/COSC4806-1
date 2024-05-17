<?php
session_start();

// If the user is logged in and attempts to go to login.php, it redirects them to index.php.
if (isset($_SESSION['authenticated'])) {
  header("Location: index.php");
}
if ($_SESSION['failed_attempts'] > 0) {
  echo "This is unsuccessful attempt number " . $_SESSION['failed_attempts'] . ".";
}
else{
}
?>
  
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>

  <body>

    <h1>Login Form</h1>

    <form action="/validate.php" method="post">
      <label for="username">Username:</label>
      <br>
      <input type="text" id="username" name="username">
      <br>
      <label for="password">Password:</label>
      <br>
      <input type="password" id="password" name="password">
      <br>
      <br>
      <input type="submit" value="Submit">
    </form>

  </body>    
</html>