<!-- Include file voor bootstrap, stylesheet etc. -->
<?php include('header_menu.php'); ?>
		
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<form class="form-horizontal" role="form">
					<fieldset>
						
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="pull-left">
									<a href="orderhistorie.php" class="btn btn-primary">Orderhistorie</a>
									<a href="infoedit.php" class="btn btn-primary">Gegevens Wijzigen</a>
									<a href="pwedit.php" class="btn btn-primary">Wachtwoord wijzigen</a>
								</div>
							</div>
						</div>
						
						<?php
						$query = "SELECT * FROM klant WHERE Email = '".$_SESSION['Email']."'";
						$result=mysqli_query($db, $query) or die(mysqli_error($db));

						while($gegevens = mysqli_fetch_assoc($result)) {
							$Voornaam = $gegevens['Voornaam'];
							$Achternaam = $gegevens['Achternaam'];
							$Tussenvoegsel = $gegevens['Tussenvoegsel'];
							$Geboortedatum = $gegevens['Geboortedatum'];
							$Postcode = $gegevens['Telefoon'] ;
							$Mobiel = $gegevens['Mobiel'];
							$Aanhef = $gegevens['Aanhef'];
							$Email = $gegevens['Email'];
							$Adres = $gegevens['Adres_id'];
							$KlantID = $gegevens['Klant_id'];
								}
						?>
						
						<legend>Persoonsgegevens</legend>

						<div class="form-group">
							<label class="col-sm-2" >Voornaam</label>
							<div class="col-sm-10">
								<p> <?php echo ($Voornaam)?> </p>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2" >Achternaam</label>
							<div class="col-sm-10">
								<p> <?php echo ($Achternaam)?> </p>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2" >Tussenvoegsel</label>
							<div class="col-sm-10">
								<p> <?php echo ($Tussenvoegsel)?> </p>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-2" >Aanhef</label>
							<div class="col-sm-10">
								<p> <?php echo ($Aanhef)?> </p>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-2" >Email</label>
							<div class="col-sm-10">
								<p> <?php echo ($Email)?> </p>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2" >Klantnummer</label>
							<div class="col-sm-10">
								<p> <?php echo ($KlantID)?> </p>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-2" >Geboortedatum</label>
							<div class="col-sm-10">
								<p> <?php echo ($Geboortedatum)?> </p>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2" >Telefoon</label>
							<div class="col-sm-10">
								<p> <?php echo ($Telefoon)?> </p>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2" >Mobiel</label>
							<div class="col-sm-10">
								<p> <?php echo ($Mobiel)?> </p>
							</div>
						</div>
						  
						<?php
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
						  
						  
						  
						<legend>Adresgegevens</legend>
						  
						<div class="form-group">
							<label class="col-sm-2" >Plaats</label>
							<div class="col-sm-10">
								<p> <?php echo ($Plaats)?> </p>
							</div>
						</div>
						  
						<div class="form-group">
							<label class="col-sm-2" >Straatnaam</label>
							<div class="col-sm-10">
								<p> <?php echo ($Straatnaam)?> </p>
							</div>
						</div>
						  
						<div class="form-group">
							<label class="col-sm-2" >Huisnummer</label>
							<div class="col-sm-4">
								<p> <?php echo ($Huisnummer)?> </p>
							</div>

							<label class="col-sm-2" >Toevoeging</label>
							<div class="col-sm-4">
								<p> <?php echo ($Toevoeging)?> </p>
							</div>
						</div>
						    	  
						<div class="form-group">
							<label class="col-sm-2" >Postcode</label>
							<div class="col-sm-10">
								<p> <?php echo ($Postcode)?> </p>
							</div>
						</div>
				  		 
					</fieldset>
				</form>
			</div>
		</div>
		
	</div>


	
<?php include('footer.php'); ?>

	
