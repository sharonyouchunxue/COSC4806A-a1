<?php
session_start();

//check if user is athenticated
//if not, sent to login.php... header()...

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
  </head>
  <body>
    <h1>Login Form</h1>
    
    <form action="/validate.php" method="post">
      <label for="username">Username:</label><br>
      <input type="text" id="username" name="username"><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" value="Submit">
    </form> 

  </body>
</html>