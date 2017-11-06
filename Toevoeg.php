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

//variabelen benoemen
$sleutelhangernaam = $_POST['sleutelhangernaam'];
$beschrijving = $_POST['beschrijving'];
$categorie = $_POST['categorie'];
$gewicht = $_POST['gewicht'];
$prijs = $_POST['prijs'];
$foto = $_POST['foto'];

//input checken op waarde
$naamerror = $beschrijvingerror = $categorieerrror = $gewichterror = $gewichterror = $prijserror = $fotoerror = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($sleutelhangernaam)){
		$naamerror = "Een sleutelhanger naam is verplicht";
	}
	else {
		$sleutelhangernaam = test_input($sleutelhangernaam);
	}
	if (empty($beschrijving)){
		$beschrijvingerror = "Een beschrijving is verplicht";
	}
	if (empty($categorie)){
		$categorieerror = "Voer een categorie in";
	}
	if (empty($gewicht)){
		$gewichterror = "Voer een gewicht in";
	}
	if (empty($prijs)){
		$prijserror = "Een prijs is verplicht";
	}
	if (empty($foto)){
		$fotoerror = "Een foto is verplicht";
	}
	
}


else {
//doorsturen naar de database
$sql = "INSERT INTO sleutelhangers(sleutelhangernaam, beschrijving, categorie, gewicht, prijs, foto)";
$sql .="VALUES('$sleutelhangernaam', '$beschrijving', '$categorie', '$gewicht', '$prijs', '$foto')";

$result = mysqli_query($conn,$sql);

if ($result == true){
	echo "het is toegevoegd";
	}

else {
	echo "het is niet toegevoegd";
	}	
	
mysqli_close($conn); 
    
}



?>
 
<form method="POST" action="toevoeg.php"> 


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