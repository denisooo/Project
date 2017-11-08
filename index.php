<!-- Include file voor bootstrap, stylesheet etc. -->
<?php include('header_menu.php'); ?>
<?php $videos = Array("img/1.jpg","img/3.jpg","img/6.jpg","img/4.jpg","img/5.jpg","img/10.jpg"); ?>		
<!-- Homepagina inhoud -->
<div class="row">
	<div class="col-sm-12">
		<h1>Welkom op de webshop 'Ria's Sleutelhangers'</h1>
		<p>Op deze website heeft u de kans om mooie tweedehandse sleutelhangers te bestellen.</p>
		<p>Klik bij het menu op Aanbod om de producten te bekijken</p>
		<p>Voordat u een sleutelhanger toevoegt aan uw winkelwagen, zal u hiervoor eerst moeten inloggen en/ of inloggen.</p>
	</div>


<div class="col-md-8 col-md-offset-2">
	<div id="fotocarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators" >
		<li data-target="#fotocarousel" data-slide-to="0" class="active"></li>
		<li data-target="#fotocarousel" data-slide-to="1"></li>
		<li data-target="#fotocarousel" data-slide-to="2"></li>
	  </ol>

	  <!-- foto weergave -->
	  <div class="carousel-inner">
		<div class="item active">
		<!-- Selecteerd willekeurige foto uit array -->
		  <img src="<?php echo $videos[array_rand($videos)]; ?>" alt="Placeholder1" class="center-block" style="width:25%" style="height:25%">
		</div>
		
		<div class="item">
		  <img src="<?php echo $videos[array_rand($videos)]; ?>" alt="Placeholder2" class="center-block" style="width:25%" style="height:25%">
		</div>

		<div class="item">
		  <img src="<?php echo $videos[array_rand($videos)]; ?>" alt="Placeholder3" class="center-block" style="width:25%" style="height:25%">
		</div>
	  </div>

	  <!-- pijl naar links en rechts -->
	  <a class="left carousel-control" href="#fotocarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#fotocarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
	  </a>
	
</div>	
<!-- Einde homepagina inhoud -->

<!-- Include file voor footer -->
<?php include('footer.php'); ?>
