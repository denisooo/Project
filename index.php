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
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Winkelwagen</a></li>
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
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Winkelwagen</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Registreren</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Inloggen</a></li>
						</ul>
					</div>
				<?php } ?>
			</nav>
		</div>
		
		<!-- Homepagina inhoud -->
		<div class="row">
			<div class="col-sm-12" id="home">
				<h1>Welkom op de webshop 'Ria's Sleutelhangers'</h1>
				<p>Op deze website heeft u de kans om mooie tweedehandse sleutelhangers te bestellen.</p>
				<p>Klik bij het menu op Aanbod om de producten te bekijken</p>
				<p>Voordat u een sleutelhanger toevoegt aan uw winkelwagen, zal u hiervoor eerst moeten inloggen en/ of inloggen.</p>
			</div>
		</div>
		
	</div>
</body>