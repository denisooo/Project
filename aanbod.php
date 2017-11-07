<!-- Include file voor bootstrap, stylesheet etc. -->
<?php include('header_menu.php'); ?>

<!-- Catalogus inhoud -->
<div class="row">

	<!-- Categorieen menu -->
	<div class="col-sm-3">
		<?php
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
			<li><a href="aanbod.php?Categorie_naam=test">Alle producten</a></li>
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
		<?php
			if ($_GET['Categorie_naam'] = "Dieren"){
				$results2 = mysqli_query($db, $query2);
				if($num > 0){?>
					<div class="row">
					<?php while($row=mysqli_fetch_assoc($results2)) {?>
						<div class="col-xs-4">
							<div class="thumbnail">
								<a href="#">
									<img src="fotos/<?php echo $row['Product_id']?>_1.png" alt="Afbeelding niet beschikbaar" style="width:100%">
									<div class="caption">
										<strong><?php echo $row['Naam_product']?></strong><br>												
										Vraagprijs: <?php echo "€" . $row['Vraagprijs']?><br><br>
										<a href="#" class="btn btn-success btn-block">
											<span class="glyphicon glyphicon-shopping-cart"></span> Winkelwagen
										</a><br><br>
										<p><em><?php echo $row['Beschrijving']?></em></p>
									</div>
								</a>
							</div>
						</div>
					<?php }
				} ?>
					</div>
			<?php }
			
			elseif ($_GET['Categorie_naam'] = "Vlaggen"){
				$results2 = mysqli_query($db, $query2);
				if($num > 0){?>
					<div class="row">
					<?php while($row=mysqli_fetch_assoc($results2)) {?>
						<div class="col-xs-4">
							<div class="thumbnail">
								<a href="#">
									<img src="fotos/<?php echo $row['Product_id']?>_1.png" alt="Afbeelding niet beschikbaar" style="width:100%">
									<div class="caption">
										<strong><?php echo $row['Naam_product']?></strong><br>												
										Vraagprijs: <?php echo "€" . $row['Vraagprijs']?><br><br>
										<a href="#" class="btn btn-success btn-block">
											<span class="glyphicon glyphicon-shopping-cart"></span> Winkelwagen
										</a><br><br>
										<p><em><?php echo $row['Beschrijving']?></em></p>
									</div>
								</a>
							</div>
						</div>
					<?php }
				} ?>
					</div>
			<?php }
			
			elseif ($_GET['Categorie_naam'] = "Stripfiguren"){
				$results2 = mysqli_query($db, $query2);
				if($num > 0){?>
					<div class="row">
					<?php while($row=mysqli_fetch_assoc($results2)) {?>
						<div class="col-xs-4">
							<div class="thumbnail">
								<a href="#">
									<img src="fotos/<?php echo $row['Product_id']?>_1.png" alt="Afbeelding niet beschikbaar" style="width:100%">
									<div class="caption">
										<strong><?php echo $row['Naam_product']?></strong><br>												
										Vraagprijs: <?php echo "€" . $row['Vraagprijs']?><br><br>
										<a href="#" class="btn btn-success btn-block">
											<span class="glyphicon glyphicon-shopping-cart"></span> Winkelwagen
										</a><br><br>
										<p><em><?php echo $row['Beschrijving']?></em></p>
									</div>
								</a>
							</div>
						</div>
					<?php }
				} ?>
					</div>
			<?php }
			
			elseif ($_GET['Categorie_naam'] = "TV-series"){
				$results2 = mysqli_query($db, $query2);
				if($num > 0){?>
					<div class="row">
					<?php while($row=mysqli_fetch_assoc($results2)) {?>
						<div class="col-xs-4">
							<div class="thumbnail">
								<a href="#">
									<img src="fotos/<?php echo $row['Product_id']?>_1.png" alt="Afbeelding niet beschikbaar" style="width:100%">
									<div class="caption">
										<strong><?php echo $row['Naam_product']?></strong><br>												
										Vraagprijs: <?php echo "€" . $row['Vraagprijs']?><br><br>
										<a href="#" class="btn btn-success btn-block">
											<span class="glyphicon glyphicon-shopping-cart"></span> Winkelwagen
										</a><br><br>
										<p><em><?php echo $row['Beschrijving']?></em></p>
									</div>
								</a>
							</div>
						</div>
					<?php }
				} ?>
					</div>
			<?php }
			
			elseif ($_GET['Categorie_naam'] = "Automerken"){
				$results2 = mysqli_query($db, $query2);
				if($num > 0){?>
					<div class="row">
					<?php while($row=mysqli_fetch_assoc($results2)) {?>
						<div class="col-xs-4">
							<div class="thumbnail">
								<a href="#">
									<img src="fotos/<?php echo $row['Product_id']?>_1.png" alt="Afbeelding niet beschikbaar" style="width:100%">
									<div class="caption">
										<strong><?php echo $row['Naam_product']?></strong><br>												
										Vraagprijs: <?php echo "€" . $row['Vraagprijs']?><br><br>
										<a href="#" class="btn btn-success btn-block">
											<span class="glyphicon glyphicon-shopping-cart"></span> Winkelwagen
										</a><br><br>
										<p><em><?php echo $row['Beschrijving']?></em></p>
									</div>
								</a>
							</div>
						</div>
					<?php }
				} ?>
					</div>
			<?php }
			
			elseif ($_GET['Categorie_naam'] = "test") {
				echo "test";

				$query3 = "SELECT Product_id, Categorie_naam, Naam_product, Beschrijving, Gewicht, Vraagprijs FROM product p join categorie c ON p.categorie_id = c.categorie_id";

				$results2 = mysqli_query($db, $query3);
				if($num > 0){
					while($row=mysqli_fetch_assoc($results2)) {
						?><td><?php 
							echo $row['Naam_product'];
							echo $row['Beschrijving'];
							echo $row['Categorie_naam'];
							echo $row['Gewicht'];
							echo $row['Vraagprijs'];?>
						</td>
						<?php
					}
				}
			}?>
			
	</div>
</div>
<!-- Einde catalogus inhoud -->

<!-- Include file voor footer -->
<?php include('footer.php'); ?>
