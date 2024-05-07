- Assignment 1
Create a GitHub account

Create a Replit account

Connect them!

Create a login.php page that has a basic login form (username, password, submit)

The goal is to have a functional login form. You can hardcode username and password

Implement session variables and for every failed login attempt, keep track of it in a session variable

If the username and password are correct then take them to index.php and display their username (welcome, NAME) with the current date (formatted in a readable way)

If they log in successfully, set a session variable 'authenticated' to true (or 1)

Create a logout page that destroys the session variables

Lastly, when a user goes to index.php (or /), and they are NOT logged in, it should auto-redirect them to login.php. If they are logged in and attempt to go to login.php, redirect them to the index.php
