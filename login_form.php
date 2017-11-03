<!-- Include file voor bootstrap, stylesheet etc. -->
<?php include('header_menu.php'); ?>

<!-- Login pagina inhoud -->
<div class="row">
	<div class="col-sm-12">
		<h2>Inloggen</h2>
		<?php
			if (!isset($_SESSION['loggedin'])) {
		?>

		<table class="table">
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
<!-- Einde login pagina inhoud -->

<!-- Include file voor footer -->
<?php include('footer.php'); ?>
