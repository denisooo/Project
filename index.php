<?php
session_start();
include ('connect.php');
include ('sessions.php');
include ('sessions_error.php');
if(isset($_SESSION['rank'])){
	if($_SESSION['rank'] =='1'){
		$rights="Beheerder";
	}
	elseif($_SESSION['rank'] =='2') {
		$rights="Manager";
	}
	else {
		$rights="Medewerker";
	}
}
?>
<head>
	<title>Urenregistratiesysteem Geelhart BV</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="container">
		<div class="login">
			<h2>Urenregistratiesysteem</h2>
			<?php
			if (!isset($_SESSION['loggedin'])) {
				?>
				<table class="table">
					<tr>
						<th colspan='2'>Login</th>
					</tr>
					<tr>
						<form method="post" action="login.php">
							<td>Gebruikersnaam: </td>
						<td>
							<input type="text" name="username" placeholder="Gebruikersnaam">
						</td>
					</tr>
					<tr>
						<td>Wachtwoord: </td>
						<td>
							<input type="password" name="userpassword" placeholder="Wachtwoord">
						</td>
					</tr>
					<tr>
						<td colspan='2'>
							<input type='submit' class="button" value="Login">
						</td>
					</tr>
					</form>
				</table>
				<?php
				}
				else {
					?>
				<table class="table">
					<tr>
						<th colspan='2'> Welkom</th>
					</tr>
					<tr>
						<td>Gebruikersnaam: <?php echo $_SESSION['username'] ;?> </td>
					</tr>
					<tr>
						<td>Rechtenniveau: <?php echo $rights; ?> </td>
					</tr>
					<tr>
						<?php if($_SESSION['rank'] =='1') { ?>
							<td colspan='2'>
								<a href="logout.php"><input type="button" class="btn" value="Uitloggen"></a>
								<a href="add_user.php"><input type="button" class="btn" value="Gebruiker Aanmaken"></a>
								<a href="add_project.php"><input type="button" class="btn" value="Project Aanmaken"></a>
								<a href="add_task.php"><input type="button" class="btn" value="Taak toevoegen"></a>
								<a href="frm_summary.php"><input type="button" class="btn" value="Overzichten"></a>
							</td>
						<?php
						}
						elseif ($_SESSION['rank'] =='2') { 
						?>
							<td colspan='2'>
								<a href="logout.php"><input type="button" class="btn" value="Uitloggen"></a>
								<a href="frm_summary.php"><input type="button" class="btn" value="Overzichten"></a>
							</td>
						<?php
						}
						else {
						?>
						<td>
							<a href="logout.php"><input type="button" class="btn" value="Uitloggen"></a>
							<a href="addhours.php"><input type="button" class="btn" value="Uren toevoegen"></a>
						</td>
						<?php 
						}
						?>
					</tr>
				</table>
				<?php
				}
				?>
		</div>
	</div>
</body>