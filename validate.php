<?php
$valid_username = "sharon";
$valid_password = "passwrod";

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if($valid_username == $username && $valid_password == $password){
  echo "Successful";
}
else{
  echo "Unsuccessful";
}

?>