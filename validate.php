<?php

 session_start();

$valid_username = "sharon";
$valid_password = "12345";

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if($valid_username == $username && $valid_password == $password) {
  $_SESSION['username'] = $username;
  header ('location: /');
} else{
  
  if(!isset($_SESSION['failed_attempts'])){
    $_SESSION['failed_attempts'] = 1;
  } else{
      $_SESSION['failed_attempts'] = $_SESSION['failed_attempts'] + 1;
  }
  
  echo "This is unsuccessful attempt number: " . $_SESSION['failed_attempts'];
  }

?>