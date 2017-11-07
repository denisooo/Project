<html>

 <head>
  <title>PHP Test</title>
 </head>
 <body>

<?php 
// functie die de ingevoerde data filtert
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data; }

$conn = mysqli_connect("localhost","root","","test");

if(mysqli_connect_errno())
{
die("Connection failed: " . mysqli_connect_error());
}


//input checken op waarde
$sleutelhangernaam = $beschrijving = $categorie = $gewicht = $prijs = $foto = "";
$naamerror = $beschrijvingerror = $categorieerror = $gewichterror = $gewichterror = $prijserror = $fotoerror = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST['sleutelhangernaam'])){
		$naamerror = "Een sleutelhanger naam is verplicht";
	}
	else {
		$sleutelhangernaam = test_input($_POST['sleutelhangernaam']);
	}
	if (empty($_POST['beschrijving'])){
		$beschrijvingerror = "Een beschrijving is verplicht";
	}
	else {
		$beschrijving = test_input($_POST['beschrijving']);
	}
	if (empty($_POST['categorie'])){
		$categorieerror = "Voer een categorie in";
	}
	else {
		$categorie = test_input($_POST['categorie']);
	}
	if (empty($_POST['gewicht'])){
		$gewichterror = "Voer een gewicht in";
	}
	elseif ($_POST['gewicht']<0){
		$gewichterror = "Voer een geldig gewicht in";
	}
	else {
		$gewicht = test_input($_POST['gewicht']);
	}	
	if (empty($_POST['prijs'])){
		$prijserror = "Een prijs is verplicht";
	}
	elseif ($_POST['prijs']<0){
		$prijserror = "Voer een geldige prijs is";
	}
	else {
		$prijs = test_input($_POST['prijs']);
	}	
	if (empty($_POST['foto'])){
		$fotoerror = "Een foto is verplicht";
	}
	else {
		$foto = $_POST['foto'];
	}


	}
	


$path = "uploads/";
$path = $path . basename( $_FILES['foto']['name']);
	
	if (move_uploaded_file($_FILES['foto']['tmp_name'], $path)){
		echo "foto is geupload";
		}
		
	else {
		echo"foto is niet geupload";
		}
	
//doorsturen naar de database
$sql = "INSERT INTO sleutelhangers(sleutelhangernaam, beschrijving, categorie, gewicht, prijs, foto)";
$sql .="VALUES('$sleutelhangernaam', '$beschrijving', '$categorie', '$gewicht', '$prijs', '$foto')";

$result = mysqli_query($conn,$sql);


if ($result == true){
	echo "informatie is toegevoegd";
	}

else {
	echo "informatie is niet toegevoegd";
	}	
	
mysqli_close($conn); 
    




?>
 
<form method="POST" action="toevoeg.php" enctype="multipart/form-data"> 


Naam sleutelhanger:<br> 
<input type="text" name="sleutelhangernaam" value="<?php echo $sleutelhangernaam;?>"><span class="error">* <?php echo "$naamerror"; ?></span><br>
beschrijving:<br> 
<input type="text" name="beschrijving" value="<?php echo $beschrijving;?>"><span class="error">* <?php echo "$beschrijvingerror"; ?></span><br>

<br><select type="text" name="categorie">
	<option value="klein">Klein</option>
	<option value="Groot">Groot</option>
	<option value="Rond">Rond</option>
	<option value="Vierkant">Vierkant</option>
</select><br>

Gewicht sleutelhanger (gram):<br> 
<input type="number" name="gewicht" value="<?php echo $gewicht;?>"><span class="error">* <?php echo "$gewichterror"; ?></span><br>

Vraagprijs:<br> 
<input type="number" name="prijs" value="<?php echo $prijs;?>"><span class="error">* <?php echo "$prijserror"; ?></span><br>

Upload foto:<br>
<input type="file" name="foto" value="<?php echo $foto;?>" /><span class="error">* <?php echo "$fotoerror"; ?></span><br>

<input type="hidden" name="date" value="<?php echo $date; ?>"> 

<input type="submit" value="Toevoegen en volgend product toevoegen" action="Toevoeg.php">

<input type="submit" value="Product toevoegen en terugkeren" action="index.php">
</form>

<input type="button" value="Annuleren en terugkeren" action="index.php">
 










</body>
</html>