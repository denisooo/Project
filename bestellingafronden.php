<!-- Include file voor bootstrap, stylesheet etc. -->
<?php include('header_menu.php'); ?>
		
<!-- Bestelling afronden inhoud -->
<div class="row">
	<div class="col-sm-12">
		<h3>Bedankt voor uw bestelling. U ontvangt uw bestelling zo snel mogelijk.</h3>
		
		<!-- Winkelwagen sessie unsetten, zodat winkelwagen weer leeg is -->
		<?php 
			if(isset($_SESSION['winkelwagen'])){
				unset($_SESSION['winkelwagen']);
			}
		?>
	</div>
</div>
<!-- Einde homepagina inhoud -->

<!-- Include file voor footer -->
<?php include('footer.php'); ?>