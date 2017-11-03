<!-- Include file voor bootstrap, stylesheet etc. -->
<?php include('header_menu.php'); ?>
		
<!-- Catalogus inhoud -->
<div class="row">
	
	<!-- Categorieen menu -->
	<div class="col-sm-3">
		<?php 
			$query ="SELECT Categorie_naam FROM categorie";
			$results=mysqli_query($db, $query);
			if($results){
				$num = mysqli_num_rows($results);
			}else{
				echo mysqli_error();
			}
		?>
		
		<ul class="nav nav-pills nav-stacked" role="tablist">
			<li><a href="#">Alle producten</a></li>
			<?php
				while($row=mysqli_fetch_assoc($results)) {
			?>
					<li><a href="aanbod.php?<?php echo $row['Categorie_naam'];?>">
						<?php echo $row['Categorie_naam'];?>
					</a></li>
			<?php
				}
			?>
		</ul>
	</div>
	
	<!-- Catalogus -->
	<div class="col-sm-9">
		Afbeeldingen van producten (...)
	</div>
</div>
<!-- Einde catalogus inhoud -->

<!-- Include file voor footer -->
<?php include('footer.php'); ?>