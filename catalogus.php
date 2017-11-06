<?php include('aanbod.php'); ?>
  <body>
		<?php
		if ($results = "Dieren"){
			$query2 = "SELECT Product_id, Categorie_naam, Naam_product, Beschrijving, Gewicht, Vraagprijs  FROM product p join p.categorie_id = c.categorie_id where Categorie_naam = '".$_GET[ 'Categorie_naam']."'";
			echo "$results = mysqli_query($db, $query2)";
		}
			elseif ($results = "Vlaggen") {$query3 = "SELECT Product_id, Categorie_naam, Naam_product, Beschrijving, Gewicht, Vraagprijs  FROM product p join p.categorie_id = c.categorie_id where Categorie_naam = '".$_GET[ 'Categorie_naam']."'";
			echo "$results = mysqli_query($db, $query3)}";
		}
			elseif ($results = "Stripfiguren") {$query4 = "SELECT Product_id, Categorie_naam, Naam_product, Beschrijving, Gewicht, Vraagprijs  FROM product p join p.categorie_id = c.categorie_id where Categorie_naam = '".$_GET[ 'Categorie_naam']."'";
			$results = mysqli_query($db, $query4);
		}
			elseif ($results = "TV-series") {$query5 = "SELECT Product_id, Categorie_naam, Naam_product, Beschrijving, Gewicht, Vraagprijs  FROM product p join p.categorie_id = c.categorie_id where Categorie_naam = '".$_GET[ 'Categorie_naam']."'";
			echo "$results = mysqli_query($db, $query5)";

		}
			elseif ($results = "Äutomerken") {$query6 = "SELECT Product_id, Categorie_naam, Naam_product, Beschrijving, Gewicht, Vraagprijs  FROM product p join p.categorie_id = c.categorie_id where Categorie_naam = '".$_GET[ 'Categorie_naam']."'";
			echo "$results = mysqli_query($db, $query6)";

		}

			else {"SELECT Product_id, Categorie_naam, Naam_product, Beschrijving, Gewicht, Vraagprijs  FROM product p";

				# code..
		}


		 ?>
    </body>
</html>
