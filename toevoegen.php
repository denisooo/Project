<?php

session_start();

$product_id = $_POST['product_id'];

if(empty($_SESSION['winkelwagen'])) {
	$_SESSION['winkelwagen'] = $product_id;
}

else {
	$_SESSION['winkelwagen'] = $_SESSION['winkelwagen'] . ',' . $product_id;
}

header('Location: winkelwagen.php');
?>