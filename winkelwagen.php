<!-- Include file voor bootstrap, stylesheet etc. -->
<?php include('header_menu.php'); ?>

<!-- Winkelwagen pagina inhoud -->

<!-- Checkt of de gebruiker ingelogd is -->
<?php
	if($_SESSION['rechten'] =='0') {
		$_SESSION['errorlog']="U moet ingelogd zijn om uw winkelwagen te zien";
		header('location: index.php');
	}	
?>

<div class="row">
	<div class="col-sm-12">
		<h1><span class="glyphicon glyphicon-shopping-cart"></span> Uw winkelwagen</h1>
		
		<?php print_r($_SESSION['winkelwagen']);

		if(empty($_SESSION['winkelwagen']))
			{ ?>
				<p>Er zijn nog geen producten in uw winkelwagen.</p>
			<?php }
			
		else { ?>
			
		<table id="winkelwagen" class="table table-hover table-condensed">

			<!-- Thead voor informatie bovenaan producten -->
			<thead>
				<tr>
					<th style="width:45%">Product</th>
					<th style="width:25%">Prijs (excl. verzendkosten)</th>
					<th style="width:10%">Aantal</th>
					<th style="width 20%">Totaal</th>
				</tr>
			</thead>
			
			<!-- Tbody voor de producten in winkelwagen -->
			<tbody>

				<?php $wagen = explode('|', $_SESSION['winkelwagen']); 
				
				$i = 0;
				
				foreach($wagen as $producten) {
					$product = explode(',', $producten);
					$query = mysqli_query($db, "SELECT * FROM product WHERE Product_id = '$product[0]'");
					$row = mysqli_fetch_assoc($query);
					?>
				
					<tr>
				
					<!-- Data onder kopje Product -->
						<td>
							<div class="row">

								<!-- Afbeelding product -->
								<div class="col-sm-4 hidden-xs">
									<img src="fotos/<?php echo $row['Product_id']?>_1.png" alt="" class="img-responsive" />
								</div>

								<!-- Productbeschrijving -->
								<div class="col-sm-8">
									<h4><?php echo $row['Naam_product']?></h4>
									<p><?php echo $row['Beschrijving']?></p>
								</div>
							</div>
						</td>

						<!-- Data onder kopje Prijs (excl. verzendkosten) -->
						<td><?php echo "€ " . $row['Vraagprijs']?></td>

						<!-- Data onder kopje Aantal -->
						<td>
							<input type="number" class="form-control" value="<?php echo $product[1]; ?>">
						</td>

						<!-- Data onder kopje Totaal -->
						<td>
						<?php 
							$totaal = $row['Vraagprijs'] * $product[1];
							echo "€ " . number_format((float)$totaal, 2, '.', '');
							$sum+= $totaal;
						?></td>

						<!-- Update en Verwijder -->
						<td>
							<button class="btn btn-success btn-sm">
								<span class="glyphicon glyphicon-refresh"></span>
							</button>
							<button class="btn btn-danger btn-sm">
								<span class="glyphicon glyphicon-trash"></span>
							</button>
						</td>
					</tr>
				<?php } ?>
					
				</tbody>

			<tfoot>
				<tr>
					<td>
						<a href="aanbod.php" class="btn btn-warning">
							<span class="glyphicon glyphicon-arrow-left"></span>
							Eerst verder winkelen
						</a>
					</td>
					<td colspan="3" align="right"><strong>Totaal (excl. verzendkosten): <?php echo "€ " . number_format((float)$sum, 2, '.', '');?></strong></td>
					<td>
						<a href="bestellingafronden.php" class="btn btn-success">
							<span class="glyphicon glyphicon-arrow-right"></span>
							Bestelling afronden
						</a>
					</td>
				</tr>
			</tfoot>

		</table>
		
		<?php } ?>
		
	</div>
</div>
<!-- Einde winkelwagen pagina inhoud -->

<!-- Include file voor footer -->
<?php include('footer.php'); ?>