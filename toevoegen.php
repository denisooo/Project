<?php

session_start();

$product_id = $_POST['prod_id'];
$aantal = $_POST['aantal_prod'];

// Als de sessie nog niet is aangemaakt (nog geen producten in winkelwagen)
if(empty($_SESSION['winkelwagen'])) {
	$_SESSION['winkelwagen'] = $product_id.','.$aantal;
}

// Als de sessie al wel bestaat (al wel producten in winkelwagen)
else {
	$wagen = explode('|', $_SESSION['winkelwagen']);
	$count = count($wagen);
	$toevoegen = TRUE;
	
	foreach($wagen as $producten) {
		$product = explode(',', $producten);
		
		// Al in winkelwagen:
		if($product[0] == $product_id) {
			$product[1] = $product[1] + $aantal;
			$toevoegen = FALSE;
		}
		
		$i++;
		if($i == 1) {
			$_SESSION['winkelwagen'] = $product[0].','.$product[1];
        }
		
		else {
			$_SESSION['winkelwagen'] = $_SESSION['winkelwagen'].'|'.$product[0].','.$product[1];
		}
	}
	
	// Nog niet in winkelwagen:
	if($toevoegen) {
		$_SESSION['winkelwagen'] = $_SESSION['winkelwagen'].'|'.$product_id.','.$aantal;
	}
}

// Stuurt de gebruiker direct door naar winkelwagen	
header('Location: winkelwagen.php');
?>