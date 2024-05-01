<?php

  session_start();

  $valid_username = "pushpak";
  $valid_password = "1234";

  $username = $_REQUEST['username'];
  $_SESSION['username'] = $username;
  $password = $_REQUEST['password'];
  
  if ($valid_username == $username && $valid_password == $password) {
    $_SESSION['authenticated'] = true;
    header ('location: /');
  }
  else {
    
    if (!isset($_SESSION['failed_attempts'])){
      $_SESSION['failed_attempts'] = 1;
    }
    else {
      $_SESSION['failed_attempts'] = $_SESSION['failed_attempts'] + 1;
    }

    // header... redirect to login.php
    echo "This is unsuccessful attempt number " . $_SESSION['failed_attempts'];  
    
  }

?>