<?php
	error_reporting(E_ERROR);
	session_start();

	include ('connect.php');
	include ('sessions.php');
	include ('sessions_error.php');
?>

<head>
	<title>Ria's Sleutelhangers</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap  bestanden -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Stylesheet -->
	<link rel="stylesheet" href="style.css">
</head>

<body>
  	<div class="container">

		<!-- Include Header en Navigatie/ menu -->
		<?php include('header_menu.php'); ?>

		<!-- Homepagina inhoud -->
		<div class="row">
			<div class="col-sm-12">
				<div class="login_form">
					<h2>Inloggen</h2>
					<?php
					if (!isset($_SESSION['loggedin'])) {
						?>
						<table class="table">
							<tr>
								<th colspan='2'>Login</th>
							</tr>
							<tr>
								<form method="post" action="login_form.php">
									<td>Emailadres: </td>
								<td>
									<input type="text" name="Email" placeholder="Emailadres">
								</td>
							</tr>
							<tr>
								<td>Wachtwoord: </td>
								<td>
									<input type="password" name="Wachtwoord" placeholder="Wachtwoord">
								</td>
							</tr>
							<tr>
								<td colspan='2'>
									<input type='submit' class="button" value="Login">
								</td>
							</tr>
							</form>
						</table>
						<?php
						}
						else {
							?>

								<?php
								}
								?>
							</tr>
						</table>
				</div>
			</div>
		</div>
	</div>
	
  <?php
  if(!empty($_POST)){
  	$query="SELECT * FROM Klant WHERE `Email`='".$_POST['Email']."' AND wachtwoord='".$_POST['Wachtwoord']."'";
  	$result=mysqli_query($db, $query) or die(mysqli_error($db));

  	if(mysqli_num_rows($result) > 0) {
  		/*Login Success*/
  		$gebruikersnaam=$_POST['Email'];
  		$wachtwoord=$_POST['Wachtwoord'];
  		while($row = mysqli_fetch_row($result)){
  			$rechten = $row[11];
  			$_SESSION['Email']=$gebruikersnaam;
  			$_SESSION['Wachtwoord']=$wachtwoord;
  			$_SESSION['rechten']=$rechten;
  			$_SESSION['loggedin']="1";
  			echo "U bent nu ingelogd";
        header('location: index.php');
  		}

  	}
  	else{
  		$_SESSION['errorlog']="Login gegevens niet geldig.";
  		header('location: login_form.php');
  	}
  }
  ?>
</body>
