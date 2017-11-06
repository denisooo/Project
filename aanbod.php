<!-- Include file voor bootstrap, stylesheet etc. -->
<?php include('header_menu.php'); ?>

<!-- Catalogus inhoud -->
<div class="row">

	<!-- Categorieen menu -->
	<div class="col-sm-3">
		<?php
			$query2 = "SELECT Product_id, Categorie_naam, Naam_product, Beschrijving, Gewicht, Vraagprijs FROM product p join categorie c ON p.categorie_id = c.categorie_id WHERE Categorie_naam = '".$_GET[ 'Categorie_naam']."'";
			$query ="SELECT Categorie_naam FROM categorie";
			$results=mysqli_query($db, $query);
			if($results){
				$num = mysqli_num_rows($results);
			}else{
				echo mysqli_error();
			}
		?>

		<ul class="nav nav-pills nav-stacked" role="tablist">
			<li><a href="aanbod.php">Alle producten</a></li>
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
		<?php
		if ($_GET['Categorie_naam'] = "Dieren"){
			$results2 = mysqli_query($db, $query2);
			if($num > 0){
				while($row=mysqli_fetch_assoc($results2)) {
					?><td><?php echo $row['Naam_product'];
					echo $row['Beschrijving'];
					echo $row['Categorie_naam'];
					echo $row['Gewicht'];
					echo $row['Vraagprijs'];?>
				</td>
		<?php
	}
}
		}
			elseif ($_GET['Categorie_naam'] = "Vlaggen") {
			$results2 = mysqli_query($db, $query2);
			if($num > 0){
				while($row=mysqli_fetch_assoc($results2)) {
					?><td><?php echo $row['Naam_product'];
					echo $row['Beschrijving'];
					echo $row['Categorie_naam'];
					echo $row['Gewicht'];
					echo $row['Vraagprijs'];?>
				</td>
		<?php
	}
}
		}
			elseif ($_GET['Categorie_naam'] = "Stripfiguren") {
			$results2 = mysqli_query($db, $query2);
			if($num > 0){
				while($row=mysqli_fetch_assoc($results2)) {
					?><td><?php echo $row['Naam_product'];
					echo $row['Beschrijving'];
					echo $row['Categorie_naam'];
					echo $row['Gewicht'];
					echo $row['Vraagprijs'];?>
				</td>
		<?php
	}
}
		}
			elseif ($_GET['Categorie_naam'] = "TV-series") {
			$results = mysqli_query($db, $query2);
			if($num > 0){
				while($row=mysqli_fetch_assoc($results2)) {
					?><td><?php echo $row['Naam_product'];
					echo $row['Beschrijving'];
					echo $row['Categorie_naam'];
					echo $row['Gewicht'];
					echo $row['Vraagprijs'];?>
				</td>
		<?php
	}
}
		}
			elseif ($_GET['Categorie_naam'] = "Automerken") {
			$results2 = mysqli_query($db, $query2);
			if($num > 0){
				while($row=mysqli_fetch_assoc($results2)) {
					?><td><?php echo $row['Naam_product'];
					echo $row['Beschrijving'];
					echo $row['Categorie_naam'];
					echo $row['Gewicht'];
					echo $row['Vraagprijs'];?>
				</td>
		<?php
	}
}
		}
			else {
        $query2 = "SELECT Product_id, Categorie_naam, naam_product, Beschrijving, Gewicht, Vraagprijs FROM product p JOIN categorie c ON p.Categorie_id = c.Categorie_id ";
				$results2 = mysqli_query($db, $query2);
				if($num > 0){
    			while($row=mysqli_fetch_assoc($results2)) {
						?><td><?php echo $row['Naam_product'];
						echo $row['Beschrijving'];
						echo $row['Categorie_naam'];
						echo $row['Gewicht'];
						echo $row['Vraagprijs'];?>
					</td>
			<?php
		}
}
}
?>
	</div>
</div>
<!-- Einde catalogus inhoud -->

<!-- Include file voor footer -->
<?php include('footer.php'); ?>
