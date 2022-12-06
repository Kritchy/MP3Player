<?php

// Get the entered username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Save the username and password to a text file
$file = fopen('saved-data.txt', 'w');
fwrite($file, "Username: $username\nPassword: $password\n");
fclose($file);

?>