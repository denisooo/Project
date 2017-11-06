<!-- Include file voor bootstrap, stylesheet etc. -->
<?php include('header_menu.php'); ?>
		
<!-- Homepagina inhoud -->
<div class="row">
	<div class="col-sm-12">
		<h1>Contactpagina</h1><br>
		<table>
			<tr colspan="2" align="left">
				<th>Contactgegevens</th>
			</tr>
			<tr>
				<td>Naam verkoper: </td> 
				<td>Ria Haan</td>
			</tr>
			<tr>
				<td>Telefoonnummer: </td>
				<td>06-12345678</td>
			</tr>
			<tr>
				<td>Vestigingsadres: </td>
				<td>Neckarstraat 23</td>
			</tr>
		</table><br>
	</div>
</div>

<div class="row">
	<div class="col-sm-8">
		<div class="well">
			<form class="form-horizontal">
				<fieldset>
					
					<legend>Contactforumulier</legend>
				
					<div class="form-group">
						<label class="control-label col-sm-3" for "naam">Naam:</label>
						<div class="col-sm-9">
							<input type="text" class="form-control id="naam" placeholder="Voornaam Achternaam">
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-sm-3" for "email">E-mail:</label>
						<div class="col-sm-9">
							<input type="email" class="form-control id="email" placeholder="voorbeeld@gmail.com">
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-sm-3" for "bericht">Uw bericht/ vraag</label>
						<div class="col-sm-9">
							<textarea class="form-control" id="bericht" placeholder="Schrijf hier uw bericht/ vraag/ etc." rows="8"></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-12" align="right">
							<button type="submit" class="btn btn-primary btn-lg">Verstuur uw bericht</button>
						</div>
					</div>
				
				</fieldset>
			</form>
		</div>
	</div>
</div>
<!-- Einde homepagina inhoud -->

<!-- Include file voor footer -->
<?php include('footer.php'); ?>