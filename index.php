<?php
 session_start();

//check if user is authenticated
//If not, send them to login.php... heaer()..
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Sharon</title>
  </head>

  <body>
    <h1>Assignment1</h1>
    <p>Welcome, <?=$_SESSION['username']?></p>

  </body>

  <footer>
    <p><a href="/logout.php">Click here to logout</a></p>
  </footer>
</html>