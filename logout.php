<?php
session_start();
if(isset($_SESSION['username'])){
   unset($_SESSION['username']);
}

if(isset($_SESSION['userpassword'])){
   unset($_SESSION['userpassword']);
}

if(isset($_SESSION['rank'])){
   $_SESSION['rank']='0';
}

if(isset($_SESSION['loggedin'])){
	unset($_SESSION['loggedin']);
}

header('location: index.php');  
  
  
?>