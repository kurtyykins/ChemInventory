<?php
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("location: /index.php");
  exit;
 }
?>