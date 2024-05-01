<?php

  $valid_username = "pushpak";
  $valid_password = "1234";

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  if ($valid_username == $username && $valid_password == $password) {
    echo "Successful login";
  }
  else {
    echo "Failed to login";
  }

?>