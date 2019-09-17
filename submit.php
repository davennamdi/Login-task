<?php
 $username = $_POST['username'];
 $password = $_POST['password'];

 if(empty($username)) {
     $username_err = 'Please enter username';
 } elseif (strlen($username) < 6) {
     $username_err = 'Alert: Username cannot be lower than 6 letters';
 }
 if (empty($password)) {
     $password_err = 'Please enter password';
  } elseif (strlen($password) < 8) {
     $password_err = 'Alert: Password cannot be lower than 8 characters';

  }
  

include('index.php')


?>