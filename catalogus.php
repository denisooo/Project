<?php include('aanbod.php'); ?>
  <body>
		<?php
		if ($results = "Dieren"){
			$query2 = "SELECT Product_id, Categorie_naam, Naam_product, Beschrijving, Gewicht, Vraagprijs  FROM product p join p.categorie_id = c.categorie_id where Categorie_naam = '".$_GET[ 'Categorie_naam']."'";
			echo "$results = mysqli_query($db, $query2)";
		}
			elseif ($results = "Vlaggen") {
      $query2 = "SELECT Product_id, Categorie_naam, Naam_product, Beschrijving, Gewicht, Vraagprijs  FROM product p join p.categorie_id = c.categorie_id where Categorie_naam = '".$_GET[ 'Categorie_naam']."'";
			echo "$results = mysqli_query($db, $query2)";
		}
			elseif ($results = "Stripfiguren") {
      $query2 = "SELECT Product_id, Categorie_naam, Naam_product, Beschrijving, Gewicht, Vraagprijs  FROM product p join p.categorie_id = c.categorie_id where Categorie_naam = '".$_GET[ 'Categorie_naam']."'";
			$results = mysqli_query($db, $query2);
		}
			elseif ($results = "TV-series") {
      $query2 = "SELECT Product_id, Categorie_naam, Naam_product, Beschrijving, Gewicht, Vraagprijs  FROM product p join p.categorie_id = c.categorie_id where Categorie_naam = '".$_GET[ 'Categorie_naam']."'";
			echo "$results = mysqli_query($db, $query2)";

		}
			elseif ($results = "Automerken") {
      $query2 = "SELECT Product_id, Categorie_naam, Naam_product, Beschrijving, Gewicht, Vraagprijs  FROM product p join p.categorie_id = c.categorie_id where Categorie_naam = '".$_GET[ 'Categorie_naam']."'";
			echo "$results = mysqli_query($db, $query2)";

		}

			else {
        $query2 = "SELECT Product_id, Categorie_naam, Naam_product, Beschrijving, Gewicht, Vraagprijs  FROM product p join p.categorie_id = c.categorie_id ";
		}


		 ?>
    </body>
</html>
