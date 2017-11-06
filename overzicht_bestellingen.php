<!-- Include file voor bootstrap, stylesheet etc. -->
<?php include('header_menu.php'); ?>

<!-- Checkt of de gebruiker deze pagina mag zien -->
<?php
if($_SESSION['rechten'] =='1') {
		$_SESSION['errorlog']="U heeft geen rechten om deze pagina te bekijken";
	header('location: index.php');
}
elseif($_SESSION['rechten'] =='0') {
    $_SESSION['errorlog']="U heeft geen rechten om deze pagina te bekijken";
    header('location: index.php');
} ?>
<!-- Query voor bestelling id`s -->
    <?php
    $query ="SELECT Bestelling_id FROM bestelling ORDER BY Bestelling_id";
    $results=mysqli_query($db, $query);
    if($results){
    $num = mysqli_num_rows($results);
    }else{
    echo mysqli_error();
    }
     ?>
<!-- Overzicht Bestelling id`s -->
	<table id="summary">
		<tr>
			<td><h1> Bestelling Overzicht</h1></td>
		</tr>
		<?php
		if($num > 0){
			while($row=mysqli_fetch_assoc($results)) {
				?>
				<div container="bestellingen">
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <div class="pull-left">
				<tr>
			<td><?php echo $row['Bestelling_id']; ?></td>
			<td><a href="Overzicht_Bestellingid.php?Bestelling_id=<?php echo $row['Bestelling_id'];?>"><input type="button" class="btn btn-info" value="Bekijken"></a></td>
				</tr>
      </div>
    </div>
  </div>
</div>
		<?php
			}
			?>
				<tr>
					<td colspan='2'>
						<a href="index.php"><input type="button" class="btn btn-default" value="Terug"></a>
					</td>
				</tr>
			<?php
			}else{
		?>
		<tr>
			<td>Geen bestellingen gevonden</td>
		</tr>
		<?php
			}
		?>
	</table>
</body>
