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

		<!-- Register_form inhoud -->
		<div class="row">
			<div class="col-sm-12">
				<div class="register_form">
					<h2>Registreren</h2>
					<?php
					if (!isset($_SESSION['loggedin'])) {
					?>
					  <table class="table">
						<tr>
						  <form method="post" action="register_form.php">
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
						  <td>Herhaal Wachtwoord: </td>
						  <td>
							<input type="password" name="confirm_Wachtwoord" placeholder="Herhaal Wachtwoord">
						  </td>
						</tr>
						<tr>
						  <td>Aanhef: </td>
						  <td>
							<select name='Aanhef'>
							<option value='Heer' selected>Heer</option>
							<option value='Mevrouw'>Mevrouw</option>
							</select>
						  </td>
						</tr>
						<tr>
						  <td>Voornaam: </td>
						  <td>
							<input type="text" name="Voornaam" placeholder="Voornaam">
						  </td>
						</tr>
						<tr>
						<tr>
						  <td>Tussenvoegsel: </td>
						  <td>
							<input type="text" name="Tussenvoegsel" placeholder="Tussenvoegsel">
						  </td>
						  </tr>
						  <td>Achternaam: </td>
						  <td>
							<input type="text" name="Achternaam" placeholder="Achternaam">
						  </td>
						</tr>
						<tr>
						  <td>Postcode: </td>
						  <td>
							<input type="text" name="Postcode" placeholder="Postcode">
						  </td>
						</tr>
						<tr>
						  <td>Straatnaam: </td>
						  <td>
							<input type="text" name="Straatnaam" placeholder="Straatnaam">
						  </td>
						</tr>
						<tr>
						  <td>Huisnummer: </td>
						  <td>
							<input type="text" name="Huisnummer" placeholder="Huisnummer">
						  </td>
						</tr>
						<tr>
						  <td>Plaats: </td>
						  <td>
							<input type="text" name="Plaats" placeholder="Plaats">
						  </td>
						</tr>
						<tr>
						  <td colspan='2'>
							<input type='submit' class="button" value="Registreren">
						  </td>
						</tr>
						</form>
					  </table>
					  <?php
					  }
					  else {
					  }?>
					  <?php
					  /* Form Required Field Validation */
				foreach($_POST as $key=>$value) {
					if(empty($_POST[$key])) {
					$error_message = "Alle velden zijn vereist";
					break;
					}
				}
				/* Password Matching Validation */
				if($_POST['Wachtwoord'] != $_POST['confirm_Wachtwoord']){
				$error_message = 'Wachtwoorden komen niet overeen<br>';
				}

				if(!isset($error_message)) {
				  if (!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
					$error_message = "Invalid Email Address";
					}
				}
				  // If the values are posted, insert them into the database.
				  if (isset($_POST['Email']) && isset($_POST['Wachtwoord'])){
					  $email = $_POST['Email'];
					  $wachtwoord = $_POST['Wachtwoord'];
					  $aanhef = $_POST['Aanhef'];
					  $voornaam = $_POST['Voornaam'];
					  $tussenvoegsel = $_POST['Tussenvoegsel'];
					  $achternaam = $_POST['Achternaam'];
					  $postcode = $_POST['Postcode'];
					  $straatnaam = $_POST['Straatnaam'];
					  $huisnummer = $_POST['Huisnummer'];
					  $plaats = $_POST['Plaats'];

					  $query = "INSERT INTO `klant` (Email, Wachtwoord, Aanhef, Voornaam, Tussenvoegsel, Achternaam) VALUES ('$email', '$wachtwoord', '$aanhef', '$voornaam', '$tussenvoegsel', '$achternaam');
								INSERT INTO `adres` (Straatnaam, Huisnummer, Postcode, Plaats) VALUES ('$straatnaam', '$huisnummer', '$postcode', '$plaats')";
					  $result = mysqli_multi_query($db, $query);
					  if($result){
						  echo "Gebruiker aangemaakt";
					  }else{
						  echo "Gebruiker Niet aangemaakt";
					  }
				  }
				?>
				</div>
			</div>
		</div>
	</div>
</body>
