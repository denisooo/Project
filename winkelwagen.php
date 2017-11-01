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
	
		<!-- Header -->
		<div class="row">
			<div class="jumbotron text-center">
					<h1>Ria's Sleutelhangers</h1>
					<p>Webshop tweedehands sleutelhangers</p>
			</div>
		</div>
				
		<!-- Navigatie/ menu -->
		<div class="row">
			<nav class="navbar navbar-inverse">
				<div class="navbar-header">
					
					<!-- Smal scherm -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
					
					<a class="navbar-brand" href="#">Home</a>
				</div>
			
				<!-- Admin menu -->
				<?php if($_SESSION['rechten'] =='2') { ?>			
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li><a href="#">Aanbod</a></li>
							<li><a href="#">Sleutelhangers toevoegen</a></li> 
							<li><a href="#">Advertenties bewerken</a></li>
							<li><a href="#">Advertenties verwijderen</a></li>
							<li><a href="#">Overzicht bestellingen</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Uitloggen</a></li>
						</ul>
					</div>
				
				<!-- Klanten ingelogd menu -->
				<?php } elseif ($_SESSION['rechten'] =='1') { ?>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li><a href="#">Aanbod</a></li>
							<li><a href="#">Klantenservice</a></li>
							<li><a href="#">Accountinfo</a></li>
							<li><a href="#">Orderhistorie</a></li>
						</ul
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Winkelwagen</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Inloggen</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Uitloggen</a></li>
						</ul>
					</div>
				
				<!-- Niet ingelogd menu -->
				<?php } else { ?>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li><a href="#">Aanbod</a></li>
							<li><a href="#">Klantenservice</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Winkelwagen</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Registreren</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Inloggen</a></li>
						</ul>
					</div>
				<?php } ?>
			</nav>
		</div>
		
		<!-- Homepagina inhoud -->
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
		
	</div>
</body>