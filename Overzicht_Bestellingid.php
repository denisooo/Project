<!-- Include file voor bootstrap, stylesheet etc. -->
<?php include('header_menu.php'); ?>
<!-- Checkt of er als admin ingelogd is -->
<?php
if($_SESSION['rechten'] =='1') {
		$_SESSION['errorlog']="U heeft geen rechten om deze pagina te bekijken";
	header('location: index.php');
}
else {
}
?>
<table id="summary">
  <tr>
    <td colspan="3"><h1>Bestelling Overzicht</h1></td>
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
  $query ="SELECT B.Bestelling_id as bestelling_id, B.Tijd_Bestelling as datum, K.Email as Email, K.Voornaam as voornaam, K.Achternaam as achternaam, P.Naam_Product as naam_product, P.Beschrijving as beschrijving FROM Bestelling B JOIN Klant K ON B.Klant_id = K.Klant_id JOIN bestellingproduct bp ON b.Bestelling_id = bp.Bestelling_id JOIN Product P ON Bp.Product_id = P.Product_id WHERE B.Bestelling_id='".$_GET['Bestelling_id']."' ";
  $results=mysqli_query($db, $query);
  $bestellingen=mysqli_fetch_assoc($results);
  ?>
  <div id="overzicht">
  <div class="overzicht">
   <tr>
    <td><strong>Bestellingid:</strong></td>
    <td><?php echo ($bestellingen['bestelling_id'])?> </td>
  </tr>
  <tr>
    <td><strong>Email:</strong></td>
    <td><?php echo ($bestellingen['Email']) ?> </td>
  </tr>
  <tr>
	<td><strong>Voornaam:</strong></td>
	<td><?php echo ($bestellingen['voornaam']) ?> </td>
  </tr>
  <tr>
  <td><strong>Achternaam:</strong></td>
  <td><?php echo ($bestellingen['achternaam']) ?> </td>
  </tr>
  <tr>
  <td><strong>Naam Product:</strong></td>
  <td><?php echo ($bestellingen['naam_product']) ?> </td>
  </tr>
  <tr>
  <td><strong>Beschrijving:</strong></td>
  <td><?php echo ($bestellingen['beschrijving']) ?> </td>
  </tr>
  <tr>
  <td><strong>Besteldatum & tijd</strong></td>
  <td><?php echo ($bestellingen['datum']) ?> </td>
</tr>
  </div></div>
  <tr>
    <td colspan="2"><hr /></td>
  </tr>

				<tr>
					<td colspan='2'>
						<a href="overzicht_bestellingen.php"><input type="button" class="btn btn-default" value="Terug"></a>
					</td>
				</tr>


  </table>
</body>
