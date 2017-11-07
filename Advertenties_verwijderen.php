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

<?php
$query = "DELETE FROM product WHERE Product_id ='".$_GET['Product_id']."' ";
$results = mysqli_query($db, $query);
if (mysqli_query($db, $query)) {
  ?><div class="alert alert-success"><?php
  echo "Advertentie verwijderd";
  ?></div> <?php
}else {
    ?><div class="alert alert-warning"><?php
    echo "Functie nog niet geimplementeerd";
    ?></div> <?php
  }


 ?>
 <tr>
   <br>
   <td colspan='2'>
     <a href="Overzicht_advertenties.php"><input type="button" class="btn btn-default" value="Terug"></a>
   </td>
 </tr>

 <!-- Include file voor footer -->
 <?php include('footer.php'); ?>
