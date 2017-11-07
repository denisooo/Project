<?php include('header_menu.php'); ?>

<?php
$query1 = "SELECT * FROM categorie";
$result1 = mysqli_query($db, $query1);


?>

<h1>Product toevoegen</h1>

<form method="POST" action="toevoeg.php" enctype="multipart/form-data"> 

<H4 style="font-weight: bold; color: black;">
Naam sleutelhanger:<br> 
<input type="text" name="Naam_product" ><span class="error"></span><br>
Beschrijving:<br> 
<input type="text" name="Beschrijving" ><span class="error"></span><br>


Categorie:
<br><select type="text" name="Categorie_id">
	<?php while ($row = mysqli_fetch_array($result1)){
		echo "<option value='" .$row['Categorie_id'] . "'>" .$row['Categorie_naam'] ."</option>";
	}
	?>
	
</select><br>

Gewicht sleutelhanger (gram):<br> 
<input type="number" name="Gewicht" ><span class="error"></span><br>

Vraagprijs in euro's:<br> 
<input type="number" name="Vraagprijs" step="0.1"><span class="error"></span><br>

Upload foto:<br>
<input type="file" name="foto"/><span class="error"></span><br>

<input type="submit" value="Product toevoegen" action="Toevoeg.php">



<a href="index.php"><input type="button" value="Annuleren en terugkeren"></a>


</H4>

<?php 
// functie die de ingevoerde data filtert
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data; }






//input checken op waarde
//$Naam_product = $Beschrijving = $Categorie_id = $Gewicht = $Vraagprijs = $foto = "";
/*$naamerror = $Beschrijvingerror = $Categorie_iderror = $Gewichterror = $Gewichterror = $Vraagprijserror = $fotoerror = ""; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST['Naam_product'])){
		$error_message = "Alle velden zijn verplicht";
		break;
	}
	else {
		$Naam_product = test_input($_POST['Naam_product']);
	}
	if (empty($_POST['Beschrijving'])){
		$error_message = "Alle velden zijn verplicht";
		break;
	}
	else {
		$Beschrijving = test_input($_POST['Beschrijving']);
	}
	if (empty($_POST['Categorie_id'])){
		$Categorie_iderror = "Voer een Categorie_id in";
	}
	else {
		$Categorie_id = test_input($_POST['Categorie_id']);
	}
	if (empty($_POST['Gewicht'])){
		$Gewichterror = "Voer een Gewicht in";
	}
	elseif ($_POST['Gewicht']<0){
		$Gewichterror = "Voer een geldig Gewicht in";
	}
	else {
		$Gewicht = test_input($_POST['Gewicht']);
	}	
	if (empty($_POST['Vraagprijs'])){
		$Vraagprijserror = "Een Vraagprijs is verplicht";
	}
	elseif ($_POST['Vraagprijs']<0){
		$Vraagprijserror = "Voer een geldige Vraagprijs is";
	}
	else {
		$Vraagprijs = test_input($_POST['Vraagprijs']);
	}	
	if (empty($_POST['foto'])){
		$fotoerror = "Een foto is verplicht";
	}
	else {
		$foto = $_POST['foto'];
	}


	}
	*/
	

//check op input waarde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$velden = array('Naam_product', 'Beschrijving', 'Categorie_id', 'Gewicht', 'Vraagprijs');
foreach($velden as $key=>$value) {
  if (empty($_POST[$key])) {
    echo "<br>Alle velden zijn verplicht!<br>";
	break;
  }
}
}

$path = "uploads/";
$path = $path . basename( $_FILES['foto']['name']);
	
	if (move_uploaded_file($_FILES['foto']['tmp_name'], $path)){
		echo "Foto is geupload<br>";
		}
		
	else {
		echo"Foto is niet geupload<br>";
		}

//doorsturen naar db
$Naam_product = test_input($_POST['Naam_product']);
$Beschrijving = test_input($_POST['Beschrijving']);
$Categorie_id = $_POST['Categorie_id'];
$Gewicht = $_POST['Gewicht'];
$Vraagprijs = $_POST['Vraagprijs'];

$sql = "INSERT INTO product (Naam_product, Beschrijving, Categorie_id, Gewicht, Vraagprijs) VALUES ('$Naam_product', '$Beschrijving', '$Categorie_id', '$Gewicht', '$Vraagprijs')";

$result = mysqli_query($db,$sql);


if ($result){
	echo "Informatie is toegevoegd<br>";
	}

else {
	echo "Informatie is niet toegevoegd<br>" .mysqli_error($db); 
	}	
	
mysqli_close($db); 
    




?>
 










