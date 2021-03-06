<!-- Include file voor bootstrap, stylesheet etc. -->

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

<!-- Include file voor header en navigatiemenu -->
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
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Navigatiemenu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="index.php">Home</a>
				</div>

				<!-- Admin menu -->
				<?php if($_SESSION['rechten'] =='2') { ?>
					<div class="collapse navbar-collapse" id="Navigatiemenu">
						<ul class="nav navbar-nav">
							<li><a href="aanbod.php">Aanbod</a></li>
							<li><a href="Toevoeg.php">Sleutelhangers toevoegen</a></li>
							<li><a href="Overzicht_advertenties.php">Advertenties bewerken</a></li>
							<li><a href="overzicht_bestellingen.php">Overzicht bestellingen</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Uitloggen</a></li>
						</ul>
					</div>

				<!-- Klanten ingelogd menu -->
				<?php } elseif ($_SESSION['rechten'] =='1') { ?>
					<div class="collapse navbar-collapse" id="Navigatiemenu">
						<ul class="nav navbar-nav">
							<li><a href="aanbod.php">Aanbod</a></li>
							<li><a href="contact.php">Klantenservice</a></li>
							<li><a href="profielpagina.php">Accountinfo</a></li>
							<li><a href="orderhistorie.php">Orderhistorie</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="winkelwagen.php"><span class="glyphicon glyphicon-user"></span> Winkelwagen</a></li>
							<li><a href="profielpagina.php"><span class="glyphicon glyphicon-log-in"></span> Profiel</a></li>
							<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Uitloggen</a></li>
						</ul>
					</div>

				<!-- Niet ingelogd menu -->
				<?php } else { ?>
					<div class="collapse navbar-collapse" id="Navigatiemenu">
						<ul class="nav navbar-nav">
							<li><a href="aanbod.php">Aanbod</a></li>
							<li><a href="contact.php">Klantenservice</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="winkelwagen.php"><span class="glyphicon glyphicon-shopping-cart"></span> Winkelwagen</a></li>
							<li><a href="register_form.php"><span class="glyphicon glyphicon-user"></span> Registreren</a></li>
							<li><a href="login_form.php"><span class="glyphicon glyphicon-log-in"></span> Inloggen</a></li>
						</ul>
					</div>
				<?php } ?>
			</nav>
		</div>
