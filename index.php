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

		<!-- Include Header en Navigatie/ menu -->
		<?php include('header_menu.php'); ?>

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
