<!-- Include file voor bootstrap, stylesheet etc. -->
<?php include('header_menu.php'); ?>
		
<!-- Winkelwagen pagina inhoud -->
<div class="row">
	<div class="col-sm-12">
		<h1><span class="glyphicon glyphicon-shopping-cart"></span> Uw winkelwagen</h1>
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
				<tr>
						
					<!-- Data onder kopje Product -->
					<td>
						<div class="row">
							
							<!-- Afbeelding product -->
							<div class="col-sm-4 hidden-xs">
								<img src="http://via.placeholder.com/150x150" alt="" class="img-responsive"/>
							</div>
							
							<!-- Productbeschrijving -->
							<div class="col-sm-8">
								<h4>Productnaam</h4>
								<p>Beschrijvingstekst van de sleutelhanger Beschrijvingstekst van de sleutelhanger Beschrijvingstekst van de sleutelhanger</p>
							</div>
						</div>
					</td>
					
					<!-- Data onder kopje Prijs (excl. verzendkosten) -->
					<td>€5.00</td>
					
					<!-- Data onder kopje Aantal -->
					<td>
						<input type="number" class="form-control" value="1">
					</td>

					<!-- Data onder kopje Totaal -->
					<td>€5.00</td>
					
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
				
				<tr>
				
					<!-- Data onder kopje Product -->
					<td>
						<div class="row">
							
							<!-- Afbeelding product -->
							<div class="col-sm-4 hidden-xs">
								<img src="http://via.placeholder.com/150x150" alt="" class="img-responsive"/>
							</div>
							
							<!-- Productbeschrijving -->
							<div class="col-sm-8">
								<h4>Productnaam</h4>
								<p>Beschrijvingstekst van de sleutelhanger Beschrijvingstekst van de sleutelhanger Beschrijvingstekst van de sleutelhanger</p>
							</div>
						</div>
					</td>
					
					<!-- Data onder kopje Prijs (excl. verzendkosten) -->
					<td>€5.00</td>
					
					<!-- Data onder kopje Aantal -->
					<td>
						<input type="number" class="form-control" value="1">
					</td>

					<!-- Data onder kopje Totaal -->
					<td>€5.00</td>
					
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
				
				<tr>
				
					<!-- Data onder kopje Product -->
					<td>
						<div class="row">
							
							<!-- Afbeelding product -->
							<div class="col-sm-4 hidden-xs">
								<img src="http://via.placeholder.com/150x150" alt="" class="img-responsive"/>
							</div>
							
							<!-- Productbeschrijving -->
							<div class="col-sm-8">
								<h4>Productnaam</h4>
								<p>Beschrijvingstekst van de sleutelhanger Beschrijvingstekst van de sleutelhanger Beschrijvingstekst van de sleutelhanger</p>
							</div>
						</div>
					</td>
					
					<!-- Data onder kopje Prijs (excl. verzendkosten) -->
					<td>€5.00</td>
					
					<!-- Data onder kopje Aantal -->
					<td>
						<input type="number" class="form-control" value="1">
					</td>

					<!-- Data onder kopje Totaal -->
					<td>€5.00</td>
					
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
			</tbody>
			
			<tfoot>
				<tr>
					<td>
						<a href="#" class="btn btn-warning">
							<span class="glyphicon glyphicon-arrow-left"></span>
							Eerst verder winkelen
						</a>
					</td>
					<td colspan="3" align="right"><strong>Totaal (excl. verzendkosten)</strong></td>
					<td>
						<a href="#" class="btn btn-success">
							<span class="glyphicon glyphicon-arrow-right"></span>
							Bestelling afronden
						</a>
					</td>
				</tr>
			</tfoot>
			
		</table>
	</div>
</div>
<!-- Einde winkelwagen pagina inhoud -->

<!-- Container en body afsluiten -->
</div>
</body>