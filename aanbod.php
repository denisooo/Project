<!-- Include file voor bootstrap, stylesheet etc. -->
<?php include('header_menu.php'); ?>

<!-- Catalogus inhoud -->
<div class="row">

	<!-- Categorieen menu -->
	<div class="col-sm-3">
		<?php
			$query3 = "SELECT Product_id, Naam_product, Beschrijving, Gewicht, Vraagprijs FROM product";
			$query2 = "SELECT Product_id, Categorie_naam, Naam_product, Beschrijving, Gewicht, Vraagprijs FROM product p join categorie c ON p.categorie_id = c.categorie_id WHERE Categorie_naam = '" . $_GET[ 'Categorie_naam'] . "'";
			$query ="SELECT Categorie_naam FROM categorie";
			$results=mysqli_query($db, $query);
			if($results){
				$num = mysqli_num_rows($results);
			}else{
				echo mysqli_error();
			}
		?>

		<ul class="nav nav-pills nav-stacked" role="tablist">
			<li><a href="aanbod.php?Categorie_naam=Alle_producten">Alle producten</a></li>
			<?php
				while($row=mysqli_fetch_assoc($results)) {
			?>
					<li><a href="aanbod.php?Categorie_naam=<?php echo $row['Categorie_naam'];?>">
						<?php echo $row['Categorie_naam'];?>
					</a></li>
			<?php
				}
			?>
		</ul>
	</div>
	
	<!-- Catalogus -->
	<div class="col-sm-9">
		<?php if ($_GET['Categorie_naam'] = "Alle_producten"){
			$results3 = mysqli_query($db, $query3);
			if($num > 0){?>
				<div class="row">
					<?php while($row=mysqli_fetch_assoc($results3)) {?>
						<div class="col-xs-4">
							<div class="thumbnail">
								<form action="toevoegen.php" method="post">;
									<img src="fotos/<?php echo $row['Product_id']?>_1.png" alt="Afbeelding niet beschikbaar" style="width:100%">
									<div class="caption">
										<input type="hidden" name="prod_id" value="<?php echo $row['Product_id']?>" />
										<strong><?php echo $row['Naam_product']?></strong><br>	
										Vraagprijs: <?php echo "€" . $row['Vraagprijs']?><br>
										Aantal: <input type="text" name="aantal_prod" size="2" maxlength="2" value="1" /><br><br>
										<input class="btn btn-success btn-block" type="submit" value="Winkelwagen" /> 
										<p><em><?php echo $row['Beschrijving']?></em></p>
									</div>
								</form>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php }
		} 
	
		elseif ($_GET['Categorie_naam'] = "Dieren"){
			$results2 = mysqli_query($db, $query2);
			if($num > 0){?>
				<div class="row">
					<?php while($row=mysqli_fetch_assoc($results2)) {?>
						<div class="col-xs-4">
							<div class="thumbnail">
								<form action="toevoegen.php" method="post">;
									<img src="fotos/<?php echo $row['Product_id']?>_1.png" alt="Afbeelding niet beschikbaar" style="width:100%">
									<div class="caption">
										<input type="hidden" name="prod_id" value="<?php echo $row['Product_id']?>" />
										<strong><?php echo $row['Naam_product']?></strong><br>	
										Vraagprijs: <?php echo "€" . $row['Vraagprijs']?><br>
										Aantal: <input type="text" name="aantal_prod" size="2" maxlength="2" value="1" /><br><br>
										<input class="btn btn-success btn-block" type="submit" value="Winkelwagen" /> 
										<p><em><?php echo $row['Beschrijving']?></em></p>
									</div>
								</form>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php }
		} 
									
		elseif ($_GET['Categorie_naam'] = "Vlaggen"){
			$results2 = mysqli_query($db, $query2);
			if($num > 0){?>
				<div class="row">
					<?php while($row=mysqli_fetch_assoc($results2)) {?>
						<div class="col-xs-4">
							<div class="thumbnail">
								<form action="toevoegen.php" method="post">;
									<img src="fotos/<?php echo $row['Product_id']?>_1.png" alt="Afbeelding niet beschikbaar" style="width:100%">
									<div class="caption">
										<input type="hidden" name="prod_id" value="<?php echo $row['Product_id']?>" />
										<strong><?php echo $row['Naam_product']?></strong><br>	
										Vraagprijs: <?php echo "€" . $row['Vraagprijs']?><br>
										Aantal: <input type="text" name="aantal_prod" size="2" maxlength="2" value="1" /><br><br>
										<input class="btn btn-success btn-block" type="submit" value="Winkelwagen" /> 
										<p><em><?php echo $row['Beschrijving']?></em></p>
									</div>
								</form>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php }
		}

		elseif ($_GET['Categorie_naam'] = "Stripfiguren"){
			$results2 = mysqli_query($db, $query2);
			if($num > 0){?>
				<div class="row">
					<?php while($row=mysqli_fetch_assoc($results2)) {?>
						<div class="col-xs-4">
							<div class="thumbnail">
								<form action="toevoegen.php" method="post">;
									<img src="fotos/<?php echo $row['Product_id']?>_1.png" alt="Afbeelding niet beschikbaar" style="width:100%">
									<div class="caption">
										<input type="hidden" name="prod_id" value="<?php echo $row['Product_id']?>" />
										<strong><?php echo $row['Naam_product']?></strong><br>	
										Vraagprijs: <?php echo "€" . $row['Vraagprijs']?><br>
										Aantal: <input type="text" name="aantal_prod" size="2" maxlength="2" value="1" /><br><br>
										<input class="btn btn-success btn-block" type="submit" value="Winkelwagen" /> 
										<p><em><?php echo $row['Beschrijving']?></em></p>
									</div>
								</form>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php }
		} 
		
		elseif ($_GET['Categorie_naam'] = "TV-series"){
			$results2 = mysqli_query($db, $query2);
			if($num > 0){?>
				<div class="row">
					<?php while($row=mysqli_fetch_assoc($results2)) {?>
						<div class="col-xs-4">
							<div class="thumbnail">
								<form action="toevoegen.php" method="post">;
									<img src="fotos/<?php echo $row['Product_id']?>_1.png" alt="Afbeelding niet beschikbaar" style="width:100%">
									<div class="caption">
										<input type="hidden" name="prod_id" value="<?php echo $row['Product_id']?>" />
										<strong><?php echo $row['Naam_product']?></strong><br>	
										Vraagprijs: <?php echo "€" . $row['Vraagprijs']?><br>
										Aantal: <input type="text" name="aantal_prod" size="2" maxlength="2" value="1" /><br><br>
										<input class="btn btn-success btn-block" type="submit" value="Winkelwagen" /> 
										<p><em><?php echo $row['Beschrijving']?></em></p>
									</div>
								</form>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php }
		}

		elseif ($_GET['Categorie_naam'] = "Automerken"){
			$results2 = mysqli_query($db, $query2);
			if($num > 0){?>
				<div class="row">
					<?php while($row=mysqli_fetch_assoc($results2)) {?>
						<div class="col-xs-4">
							<div class="thumbnail">
								<form action="toevoegen.php" method="post">;
									<img src="fotos/<?php echo $row['Product_id']?>_1.png" alt="Afbeelding niet beschikbaar" style="width:100%">
									<div class="caption">
										<input type="hidden" name="prod_id" value="<?php echo $row['Product_id']?>" />
										<strong><?php echo $row['Naam_product']?></strong><br>	
										Vraagprijs: <?php echo "€" . $row['Vraagprijs']?><br>
										Aantal: <input type="text" name="aantal_prod" size="2" maxlength="2" value="1" /><br><br>
										<input class="btn btn-success btn-block" type="submit" value="Winkelwagen" /> 
										<p><em><?php echo $row['Beschrijving']?></em></p>
									</div>
								</form>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php }
		} ?>
			
	</div>
</div>
<!-- Einde catalogus inhoud -->

<!-- Include file voor footer -->
<?php include('footer.php'); ?>
