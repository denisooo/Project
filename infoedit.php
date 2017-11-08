<!-- Include file voor bootstrap, stylesheet etc. -->
<?php 
include('header_menu.php'); 

	$query = "SELECT * FROM klant WHERE Email = '".$_SESSION['Email']."'";
	$result = mysqli_query($db, $query);
    while($gegevens = mysqli_fetch_assoc($result)) {
		$KlantID = $gegevens["Klant_id"];
		$Voornaam = $gegevens['Voornaam'];
		$Achternaam = $gegevens['Achternaam'];
		$Tussenvoegsel = $gegevens['Tussenvoegsel'];
		$Geboortedatum = $gegevens['Geboortedatum'];
		$Telefoon = $gegevens['Telefoon'] ;
		$Mobiel = $gegevens['Mobiel'];
		$Aanhef = $gegevens['Aanhef'];
		$Email = $gegevens['Email'];
		$Adres = $gegevens['Adres_id'];
	}
						
	$query = "SELECT * FROM adres WHERE Adres_id = '$Adres'";
	$result=mysqli_query($db, $query) or die(mysqli_error($db));					
	while($adresgegevens = mysqli_fetch_assoc($result)) {
		$Straatnaam = $adresgegevens['Straatnaam'];
		$Huisnummer = $adresgegevens['Huisnummer'];
		$Toevoeging = $adresgegevens['Toevoeging'];
		$Postcode = $adresgegevens['Postcode'];
		$Plaats = $adresgegevens['Plaats'] ;
	}
					
?>
		<div class="row">
	<div class="col-sm-12">
		<h2>Gegevens wijzigen</h2>
		<legend>Persoonsgegevens</legend>
		<table class="table">
		
			<form method="post" action="infoedit.php">
			<tr>
				<td>Aanhef: </td>
				<td>
					<select name='Aanhef'>
						<option value='Heer' >Heer</option>
						<option value='Mevrouw'>Mevrouw</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Voornaam: </td>
				<td>
					<input type="text" name="Voornaam" placeholder="Voornaam" value=<?php echo $Voornaam; ?>>
				</td>
			</tr>
			<tr>
				<tr>
					<td>Tussenvoegsel: </td>
					<td>
						<input type="text" name="Tussenvoegsel" placeholder="Tussenvoegsel" value=<?php echo $Tussenvoegsel; ?>>
					</td>
				</tr>
				<td>Achternaam: </td>
				<td>
					<input type="text" name="Achternaam" placeholder="Achternaam" value=<?php echo $Achternaam; ?>>
				</td>
			</tr>
			<tr>
				<td>Geboortedatum: <br/> met format: yyyy-mm-dd</td>
				<td>
					<input type="text" name="Geboortedatum" placeholder="Geboortedatum" value=<?php echo $Geboortedatum; ?>>
				</td>
			</tr>
			<tr>
				<td>Telefoon: </td>
				<td>
					<input type="text" name="Telefoon" placeholder="Telefoon" value=<?php echo $Telefoon; ?>>
				</td>
			</tr>
			<tr>
				<td>Mobiel: </td>
				<td>
					<input type="text" name="Mobiel" placeholder="Mobiel" value=<?php echo $Mobiel; ?>>
				</td>
			</tr>
			<tr>
				<td>Plaats: </td>
				<td>
					<input type="text" name="Plaats" placeholder="Plaats" value=<?php echo $Plaats; ?>>
				</td>
			</tr>
			<tr>
				<td>Straatnaam: </td>
				<td>
					<input type="text" name="Straatnaam" placeholder="Straatnaam" value=<?php echo $Straatnaam; ?>>
				</td>
			</tr>
			<tr>
				<td>Huisnummer: </td>
				<td>
					<input type="text" name="Huisnummer" placeholder="Huisnummer" value=<?php echo $Huisnummer; ?>>
				</td>
			</tr>
			<tr>
				<td>Toevoeging: </td>
				<td>
					<input type="text" name="Toevoeging" placeholder="Toevoeging" value=<?php echo $Toevoeging; ?>>
				</td>
			</tr>
			<tr>
				<td>Postcode: </td>
				<td>
					<input type="text" name="Postcode" placeholder="Postcode" value=<?php echo $Postcode; ?>>
				</td>
			</tr>
			<tr>
				<td colspan='2'>
					<input type='submit' class="btn btn-primary" value="Opslaan">
					<a href="profielpagina.php" class="btn btn-default">Annuleren</a>
				</td>
			</tr>
				</form>
		</table>

		<?php
							
					$query = "UPDATE klant SET
					Voornaam = '". $_POST["Voornaam"] ."',
					Achternaam = '". $_POST["Achternaam"] ."', 
					Tussenvoegsel = '". $_POST["Tussenvoegsel"] ."', 
					Aanhef = '". $_POST["Aanhef"] ."', 
					Geboortedatum = '". $_POST["Geboortedatum"] . "', 
					Telefoon = '". $_POST["Telefoon"] ."' ,
					Mobiel = '". $_POST["Mobiel"] ."'
					WHERE Email = '". $_SESSION['Email'] ."'";
					$result = mysqli_query($db, $query);
					if($result){
						echo "Persoonsgegevens gewijzigd";
					}
					else{
						echo "Persoonsgegevens niet gewijzigd" .mysqli_error($db);
					}	
				
				
					$query2 = "UPDATE adres SET
					Straatnaam = '". $_POST["Straatnaam"] ."',
					Huisnummer = '". $_POST["Huisnummer"] ."', 
					Plaats = '". $_POST["Plaats"] ."', 
					Postcode = '". $_POST["Postcode"] ."', 
					Toevoeging = '". $_POST["Toevoeging"] . "' 
					WHERE Adres_id = '". $Adres ."'";
					$result2 = mysqli_query($db, $query2);
					if($result2){
						echo "<br/> Adresgegevens gewijzigd";
					}
					else{
						echo "<br/> Adresgegevens niet gewijzigd" .mysqli_error($db);
					}
				
			
		?>
	</div>
</div>
		
	
<?php


 include('footer.php'); 
?>
