<?php
 $email = $_POST['signin-email'];
 $password = $_POST['signin-password'];
 $username_file = fopen("username.txt", "r") or die("An unexpected error is encountered while validating your username. Please try again later.");
 $password_file = fopen("password.txt", "r") or die("An unexpected error is encountered while validating your password. Please try again later.");
 $user = fread($username_file,filesize("username.txt"));
 $pass = fread($password_file,filesize("password.txt"));
 
 //echo (rtrim($user));
 //echo (rtrim($pass));
 //echo ($email);
 //echo ($password);
 if($email ==  rtrim($user) && $password == rtrim($pass)){
 	header("Location: upload.html");
 	
 }
 else{
 	header("Location: index.html");
 }
?>
