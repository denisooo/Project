<?php
// header en footer includen
include('header_menu.php');

// query defineren voor het kunnen kiezen van categorien uit het formulier
$query1 = "SELECT * FROM categorie";
$result1 = mysqli_query($db, $query1);


?>

<!--> Begin formulier <!-->
<h1>Product toevoegen</h1>

<form method="POST" action="toevoeg.php" enctype="multipart/form-data">

<H4 style="font-weight: bold; color: black;">
Naam sleutelhanger:  *<br>
<input type="text" name="Naam_product" ><span class="error"></span><br><br>
Beschrijving:<br>
<input type="text" name="Beschrijving" ><span class="error"></span><br><br>
Categorie:  *
<br><select type="text" name="Categorie_id">
	<?php
	// variabele row wordt gevuld zolang er waarde in de array is. De waarde die wordt toegekend aan $row is Categorie_id maar de Categorie_naam is wat er wordt laten zien.
	// Bij het versturen van het formulier wordt dus de waarde van Categorie_id verzonden.
	while ($row = mysqli_fetch_array($result1)){
	echo "<option value='" .$row['Categorie_id'] . "'>" .$row['Categorie_naam'] ."</option>";
	}
	?>
</select><br><br>
Gewicht sleutelhanger (gram):<br>
<input type="number" name="Gewicht" ><span class="error"></span><br><br>
Vraagprijs in euro's:  *<br>
<input type="number" name="Vraagprijs" step="0.1"><span class="error"></span><br><br>
Upload foto:   *<br>
<input type="file" name="foto"/><span class="error"></span><br>
<input type="submit" value="Product toevoegen" action="Toevoeg.php">
<a href="index.php"><input type="button" value="Annuleren en terugkeren"></a>
</H4>
</form>
<?php
// functie die de ingevoerde data filtert
function test_input($data) {
	// overige spaties worden eruit gehaald
	$data = trim($data);
	// slashes worden eruit gehaald
	$data = stripslashes($data);
	// speciale tekens worden aan een HTML entiteit gekoppeld
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


//De in het formulier ingevulde waarden voor: Naam_product en Vraagprijs worden dmv een foreach loop gecheckt op waarde.
// Wanneer het formulier verzonden wordt, worden deze waarden in een array geplaatst en door de loop gehaald. De loop checkt ze op een waarde.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$velden = array('Naam_product', 'Vraagprijs');
foreach($velden as $key=>$value) {
  if (empty($_POST[$key])) {
    echo "<br>Vul de verplichte velden!<br>";
	// Als we zouden willen dat er geen posts doorkomen zonder waarden, dan moeten we dit instellen in de database. Nu zijn er namelijk waarden die null mogen zijn.
	break;
  }
}
}
// Het pad voor het plaatsen van de foto wordt gedefinieerd.
$path = "fotos/";
$path = $path . basename( $_FILES['foto']['name']);

	// foto wordt geprobeerd te plaatsen in de map en er wordt direct een uitslag gemeld
	if (move_uploaded_file($_FILES['foto']['tmp_name'], $path)){
		echo "Foto is geupload<br>";
		}

	else {
		echo"Foto is niet geupload<br>";
		}

//doorsturen van gegevens naar de database

//eerst worden de variabelen gedefinieerd
//Test input wordt gebruikt om de input eventueel aan te passen
$Naam_product = test_input($_POST['Naam_product']);
$Beschrijving = test_input($_POST['Beschrijving']);
$Categorie_id = $_POST['Categorie_id'];
$Gewicht = $_POST['Gewicht'];
$Vraagprijs = $_POST['Vraagprijs'];

//de query
$sql = "INSERT INTO product (Naam_product, Beschrijving, Categorie_id, Gewicht, Vraagprijs) VALUES ('$Naam_product', '$Beschrijving', '$Categorie_id', '$Gewicht', '$Vraagprijs')";

// testen of de query succesvol verzonden is
$result = mysqli_query($db,$sql);
if ($result){
	echo "Informatie is toegevoegd<br>";
	}

else {
	echo "Informatie is niet toegevoegd<br>";
	}

mysqli_close($db);





?>

<!-- Include file voor footer -->
<?php include('footer.php'); ?>
