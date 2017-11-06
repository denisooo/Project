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
<!-- Query voor advertenties-->
    <?php
    $query ="SELECT Product_id, naam_product FROM product  ORDER BY Product_id";
    $results=mysqli_query($db, $query);
    if($results){
    $num = mysqli_num_rows($results);
    }else{
    echo mysqli_error();
    }
     ?>
     <!-- Overzicht Advertenties-->
     	<table id="summary">
     		<tr>
     			<td><h1> Overzicht Advertenties</h1></td>
     		</tr>
        <?php
        if($num > 0){
    			while($row=mysqli_fetch_assoc($results)) {
    				?>
    				<tr>
    			<td><?php echo $row['naam_product']; ?></td>
					<td><a href="Advertenties_bewerken.php?Product_id=<?php echo $row['Product_id'];?>"><input type="button" class="btn btn-warning" align ="center" value="Bewerken"></a></td>
					<td><a href="Advertenties_verwijderen.php?Product_id=<?php echo $row['Product_id'];?>"><input type="button" class="btn btn-danger" align ="center" value="Verwijderen" onclick="return confirm('Weet u het zeker dat u Advertentie <?php echo $row['naam_product'];?> wilt verwijderen?')"></a></td>
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
      <td>Geen Advertenties gevonden</td>
    </tr>
    <?php
      }
    ?>
    </table>
    </body>
