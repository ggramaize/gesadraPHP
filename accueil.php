<?php
include_once('./parametres.php');
$page="";
try
{
    $bdd = new PDO( DB_PDO_DSN, DB_USERNAME, DB_PASSWORD);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
require 'lectures.php';

$type_activation = lectureTypeActivation($bdd);
list ($indicatif_station, $ville, $departement, $service, $site_implentation) = lectureStationLocale($bdd);

if (isset($_POST['entrer_infos'])) {
	$page = "session.php";
}
elseif (isset($_POST['edit_membres'])) {
	$page = "edition-membres.php";
}
elseif (isset($_POST['voir_membres'])) {
	$page = "liste-membres.php";
}
elseif (isset($_POST['edit_membres_reseau'])) {
	$page = "edition-membres-reseau.php";
}
elseif (isset($_POST['voir_membres_reseau'])) {
	$page = "liste-membres-reseau.php";
}
elseif (isset($_POST['main_courante'])) {
	$page = "main_courante.php";
}
elseif (isset($_POST['releve_sater'])) {
	$page = "releve_sater.php";
}
 ?>
<html>
	<head>
		<title>Bienvenue sur le GesADRA !</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="assets/style.css" />
		<script type="text/javascript">
			setInterval(function(){
			document.getElementById('afficherheure').innerHTML = new Date().toLocaleTimeString(); //
			}, 500);
		</script>

	</head>
	<body>
		<table width="100%">
			<tr>
				<td width="35%">
					<div id="afficherheure" class="aff_heure"></div>
					<div class="container_menu1">
						<table width="100%">
							<tr>
								<td colspan="2" class="titre">Informations</td>
							</tr>
					
							<tr>
								<td colspan="2">
									<b>Indicatif : </b>
									<span class="variable_session"><?php echo $indicatif_station; ?></span>
									<span style="float: right;">
										<b>Service : </b>
										<span class="variable_session"><?php echo $service; ?></span>
									</span>
								</td>
							</tr>
					
							<tr>
								<td colspan="2">
									<b>Activation : </b>
									<span class="variable_session"><?php echo $type_activation; ?></span>
									<br />
								</td>
							</tr>
					
							<tr>
								<td colspan="2">
									<b>Localisation : </b>
									<span class="variable_session"><?php echo $ville," ","(", $departement,")"; ?></span>
								</td>
							</tr>
					
							<tr>
								<td colspan="2">
									<b>Site d'implentation : </b>
									<span class="variable_session"><?php echo $site_implentation; ?></span>
								</td>
							</tr>
					
							<tr>
								<td colspan="2">
									<div align="center">
										<form method="POST">
											<input type="submit" id="entrer_infos" name="entrer_infos" value="Renseigner">
										</form>
									</div>
								</td>
							</tr>
					
							<tr>
								<td colspan="2" class="titre">Membres</td>
							</tr>
					
							<tr>
								<td width="50%">
									<div align="center">
										<form method="POST">
											<input style="width:95%;" type="submit" id="voir_membres" name="voir_membres" value="Voir les membres">
										</form>
									</div>
								</td>
								<td width="50%">
									<div align="center">
										<form method="POST">
											<input style="width:95%;" type="submit" id="edit_membres" name="edit_membres" value="Editer les membres">
										</form>
									</div>
								</td>
							</tr>
					
							<tr>
								<td colspan="2" class="titre">Membres Réseau</td>
							</tr>
					
							<tr>
								<td width="50%">
									<div align="center">
										<form method="POST">
											<input style="width:95%;" type="submit" id="voir_membres_reseau" name="voir_membres_reseau" value="Voir les membres réseau">
										</form>
									</div>
								</td>
								<td width="50%">
									<div align="center">
										<form method="POST">
											<input style="width:95%;" type="submit" id="edit_membres_reseau" name="edit_membres_reseau" value="Editer les membres réseau">
										</form>
									</div>
								</td>
							</tr>
					
							<tr>
								<td colspan="2" class="titre">Mains courantes</td>
							</tr>
					
							<tr>
								<td colspan="2">
									<div align="center">
										<form method="POST">
											<input style="width:95%;" type="submit" id="main_courante" name="main_courante" value="Gestion des mains courantes">
										</form>
									</div>
								</td>
							</tr>
					
							<tr>
								<td colspan="2" class="titre">Relevés</td>
							</tr>
							
							<tr>
								<td width="50%">
									<div align="center">
										<form method="POST">
											<input style="width:95%;" type="submit" id="releve_sater" name="releve_sater" value="Relevé SATER">
										</form>
									</div>
								</td>
								<td width="50%">
									<div align="center">
										<form method="POST">
											<input style="width:95%;" type="submit" id="releve_point_part" name="releve_point_part" value="Relevé Point Particulier">
										</form>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</td>
				<td width="65%">
					<div class="container_menu2">
						<iframe src="<?php echo( $page); ?>" width="100%" style="border:none;" height="570"></iframe>
					
						<?php
						if ($page != "") {
						?>
						<div align="center">
							<form metehod="post" action="">
								<input type="submit" id="fermer_iframe" name="fermer_iframe" value="Fermer">
							</form>
						</div>
						<?php
						}
						?>

					</div>
				</td>
			</tr>
		</table>
	</body>
</html>
