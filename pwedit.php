<!-- Include file voor bootstrap, stylesheet etc. -->
<?php include('header_menu.php'); ?>


<div class="container">
  <h1>Wachtwoord wijzigen</h1>
  <p>  </p>
<?php
$query = "SELECT Wachtwoord from klant WHERE Email = '".$_SESSION['Email']."'";
$result=mysqli_query($db, $query) or die(mysqli_error($db));
$ww=mysqli_fetch_assoc($results);
 ?>

<form method="post" action="pwedit.php">
	<div class="form-group">
		<label for="pwd">Vul hier je oude wachtwoord in:</label>
		<input type="password" class="form-control" id="wwoud">
	</div>

	<div class="form-group">
		<label for="pwd">Vul hier je nieuwe wachtwoord in:</label>
		<input type="password" class="form-control" id="wwnieuw">
	</div>

	<div class="form-group">
		<label for="pwd">Bevestig je nieuwe wachtwoord</label>
		<input type="password" class="form-control" id="wwnieuw2">
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<div class="pull-right">
        <a href="profielpagina.php"><input type="button" class="btn btn-default" value="Terug"></a>
				<button type="submit" class="btn btn-primary">Opslaan</button>
			</div>
		</div>
	</div>
</form>
  <?php
    /* Form Required Field Validation */
    foreach($_POST as $key=>$value) {
      if(empty($_POST[$key])) {
        $error_message = "Alle velden zijn vereist";
        break;
      }
    }
    /* Check if old password is correct */
    if($_POST['wwoud'] != $_SESSION['Wachtwoord']){
      $error_message = 'Uw oud wachtwoord klopt niet<br>';
    }

    /* Password Matching Validation */
    if($_POST['wwnieuw'] != $_POST['wwnieuw2']){
      $error_message = 'Nieuwe wachtwoorden komen niet overeen<br>';
    }
    /* Set new password in database */
    if (isset($_POST['wwoud']) && isset($_POST['wwnieuw'])){
      $query = "UPDATE klant SET Wachtwoord=".$_POST['wwnieuw']." WHERE Email = '".$_SESSION['Email']."' ";
      $result = mysqli_query($db, $query);
      if($result){
        echo "Wachtwoord gewijzigd";
      }else{
        echo "Wachtwoord Niet gewijzigd";
      }
    }
  ?>
</div>
<!-- Include file voor footer -->
<?php include('footer.php'); ?>
