<?php

 $error = false;
 
 if( isset($_POST['btn-login']) ) { 
  
  // prevent sql injections/ clear user invalid inputs
  $name = trim($_POST['username']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);
  
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  // prevent sql injections / clear user invalid inputs
  
  if(empty($name) or empty($pass)){
   $error = true;
   $errMSG = "Please enter your username and password.";
  }
  
  // if there's no error, continue to login
  if (!$error) {
   
   $password = hash('sha256', $pass); // password hashing using SHA256
  
   $res=mysql_query("SELECT * FROM users WHERE username='$name'");
   $row=mysql_fetch_array($res);
   $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
   
   if( $count == 1 && $row['password']==$password ) {
    $_SESSION['user'] = $row['username'];
    header("Location: home.php");
   } else {
    $errMSG = "Invalid username/password";
   }
    
  }
  
 }
 ?>