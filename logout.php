<?php
session_start();
if(isset($_SESSION['Email'])){
   unset($_SESSION['Email']);
}

if(isset($_SESSION['Wachtwoord'])){
   unset($_SESSION['Wachtwoord']);
}

if(isset($_SESSION['rechten'])){
   $_SESSION['rechten']='0';
}

if(isset($_SESSION['loggedin'])){
	unset($_SESSION['loggedin']);
}

if(isset($_SESSION['winkelwagen'])){
	unset($_SESSION['winkelwagen']);
}

header('location: index.php');


?>
