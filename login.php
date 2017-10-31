<?php
session_start();
include('connect.php');

if(!empty($_POST)){
	$query="SELECT * FROM gebruikers WHERE `gebruikersnaam`='".$_POST['username']."' AND wachtwoord='".$_POST['userpassword']."'";
	$result=mysql_query($query) or die(mysql_error());
	
	if(mysql_num_rows($result) > 0) {
		/*Login Success*/
		$gebruikersnaam=$_POST['username'];
		$wachtwoord=$_POST['userpassword'];
		while($row = mysql_fetch_row($result)){
			$rank = $row[3];
			$_SESSION['username']=$gebruikersnaam;
			$_SESSION['userpassword']=$wachtwoord;			
			$_SESSION['rank']=$rank;
			$_SESSION['loggedin']="1";
			header('location: index.php');
		}
		
	}
	else{
		$_SESSION['errorlog']="Login gegevens niet geldig.";
		header('location: index.php');
	}
}
else {
	header('location: index.php');
}
?>