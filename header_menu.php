<!-- Include file voor header en navigatiemenu -->


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

			<a class="navbar-brand" href="#">Home</a>
		</div>

		<!-- Admin menu -->
		<?php if($_SESSION['rechten'] =='2') { ?>
			<div class="collapse navbar-collapse" id="Navigatiemenu">
				<ul class="nav navbar-nav">
					<li><a href="#">Aanbod</a></li>
					<li><a href="#">Sleutelhangers toevoegen</a></li>
					<li><a href="#">Advertenties bewerken</a></li>
					<li><a href="#">Advertenties verwijderen</a></li>
					<li><a href="#">Overzicht bestellingen</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Uitloggen</a></li>
				</ul>
			</div>

		<!-- Klanten ingelogd menu -->
		<?php } elseif ($_SESSION['rechten'] =='1') { ?>
			<div class="collapse navbar-collapse" id="Navigatiemenu">
				<ul class="nav navbar-nav">
					<li><a href="#">Aanbod</a></li>
					<li><a href="#">Klantenservice</a></li>
					<li><a href="#">Accountinfo</a></li>
					<li><a href="#">Orderhistorie</a></li>
				</ul
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Winkelwagen</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Profiel</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Uitloggen</a></li>
				</ul>
			</div>

		<!-- Niet ingelogd menu -->
		<?php } else { ?>
			<div class="collapse navbar-collapse" id="Navigatiemenu">
				<ul class="nav navbar-nav">
					<li><a href="#">Aanbod</a></li>
					<li><a href="#">Klantenservice</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Winkelwagen</a></li>
					<li><a href="register_form.php"><span class="glyphicon glyphicon-user"></span> Registreren</a></li>
					<li><a href="login_form.php"><span class="glyphicon glyphicon-log-in"></span> Inloggen</a></li>
				</ul>
			</div>
		<?php } ?>
	</nav>
</div>