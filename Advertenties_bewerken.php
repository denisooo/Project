<!-- Include file voor bootstrap, stylesheet etc. -->
<?php include('header_menu.php'); ?>
<!-- Checkt of er als admin ingelogd is -->
<?php
if($_SESSION['rechten'] =='1') {
		$_SESSION['errorlog']="U heeft geen rechten om deze pagina te bekijken";
	header('location: index.php');
}
elseif($_SESSION['rechten'] =='0') {
    $_SESSION['errorlog']="U heeft geen rechten om deze pagina te bekijken";
    header('location: index.php');
} ?>
<table id="summary">
  <tr>
    <td colspan="3"><h1>Overzicht Advertenties</h1></td>
  </tr>
  <tr>
    <td colspan="4"> </td>
  </tr>
  <tr>

  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
   <?php
  $query ="SELECT Product_id, naam_product, Categorie_naam, Beschrijving, Gewicht, Vraagprijs FROM product p JOIN categorie c ON p.Categorie_id = c.Categorie_id WHERE p.Product_id='".$_GET['Product_id']."' ";
  $results=mysqli_query($db, $query);
  $advertenties=mysqli_fetch_assoc($results);
  ?>
  <div id="overzicht">
  <div class="overzicht">
	<table class="table">
		<tr>
			<form method="post" action="Advertenties_bewerken.php">
   <tr>
    <td><strong>Productid:</strong></td>
    <td><input type="text" name="Product_ID" value="<?php echo ($advertenties['Product_id'])?>"></td>
  </tr>
  <tr>
    <td><strong>Naam Product:</strong></td>
    <td><input type="text" name="naam_product" value="<?php echo ($advertenties['naam_product'])?>"></td>
  </tr>
  <tr>
	<td><strong>Categorie:</strong></td>
	<td><input type="text" name="Categorie_naam" value="<?php echo ($advertenties['Categorie_naam'])?>"></td>
  </tr>
  <tr>
  <td><strong>Beschrijving:</strong></td>
	<td><input type="text" name="Beschrijving" value="<?php echo ($advertenties['Beschrijving'])?>"></td>
  </tr>
  <tr>
  <td><strong>Gewicht:</strong></td>
  <td><input type="text" name="Gewicht" value="<?php echo ($advertenties['Gewicht'])?>"></td>
  </tr>
  <tr>
  <td><strong>Vraagprijs:</strong></td>
  <td><input type="text" name="Vraagprijs" value="<?php echo ($advertenties['Vraagprijs'])?>"></td>
  </tr>

				<tr>
					<td colspan='2'>
						<a href="Overzicht_advertenties.php"><input type="button" class="btn btn-default" value="Terug"></a>
						<input type='submit' class="btn btn-primary" value="Bewerken">
					</td>
				</tr>
			</form>
			</table>
<?php
// If the values are posted, insert them into the database.
if (isset($_POST['Product_id'])){
	$Product_id = $_POST['Product_id'];
	$naam_product = $_POST['naam_product'];
	$Categorie_naam = $_POST['Categorie_naam'];
	$Beschrijving = $_POST['Beschrijving'];
	$Gewicht = $_POST['Gewicht'];
	$Vraagprijs = $_POST['Vraagprijs'];


	$query = "INSERT INTO `product` (Naam_product, Beschrijving, Gewicht, Vraagprijs) VALUES ($naam_product', '$Beschrijving', '$Gewicht', '$Vraagprijs') WHERE Product_id = $Product_id;
			INSERT INTO `categorie` (Categorie_naam) VALUES ('$Categorie_naam')";
	$result = mysqli_multi_query($db, $query);
	if($result){
		echo "Advertentie aangepast";
	}else{
		echo "Advertentie niet aangepast" .mysqli_error($db);
	}
}
?>

  </table>
</body>
