<?php
include_once('./parametres.php');
try
{
    $bdd = new PDO( DB_PDO_DSN, DB_USERNAME, DB_PASSWORD);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
require 'envois.php';

  $couleur_date_heure = '';
  $placeholder_date_heure = "Date et Heure";

if (isset($_POST['valider'])) {
	
  if (!empty($_POST['date_heure'])) {
    # code...
  
	$date_heure = ($_POST['date_heure']);

	if (!empty($_POST['nv_indicatif_membre'])) {
		$membre = ($_POST['nv_indicatif_membre']);
	}else{
		$membre = ($_POST['membre']);
	}

		$commentaire = ($_POST['commentaire']);
    $syst_coor = ($_POST['syst_coor']);
    $datum = ($_POST['datum']);
    $latitude = ($_POST['latitude']);
    $longitude = ($_POST['longitude']);
    $direction_releve = ($_POST['direction_releve']);
    $signal_releve = ($_POST['signal_releve']);



	nouveauReleveSater($bdd, $date_heure, $membre, $syst_coor, $datum, $latitude, $longitude, $direction_releve, $signal_releve, $commentaire);}
  else{
    $couleur_date_heure = 'class="fielderror"';
    $placeholder_date_heure = "Merci de remplir ce champ";
}
}


 ?>

<html>
	<head>
		<title>Relevé SATER</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="assets/style.css">
		<script type="text/javascript" src="assets/date-utils.js"></script>
	</head>
	<body>
		<form method="POST">
			<table class="formfield">
				<tr>
					<td colspan="2" class="titre">Informations relevé Sater</td>
				</tr>
				<form method="POST">
					<tr>
						<td>Reçu de :</td>
						<td>
							<select name="membre">
<?php 
$sql = "SELECT id, indicatif_membre FROM membres";
if ($res = $bdd->query($sql)) {

	/* Récupère le nombre de lignes qui correspond à la requête SELECT */
	if ($res->fetchColumn() > 0) {

	/* Effectue la vraie requête SELECT et travaille sur le résultat */
	$sql = "SELECT id, indicatif_membre FROM membres";
	foreach ($bdd->query($sql) as $row) {
?>
      
      								<option value="<?php echo( $row['indicatif_membre']); ?>"><?php echo( strtoupper($row['indicatif_membre'])); ?></option>
<?php
		}
	}
} ?>
  							</select>
							<b>OU</b>
							<input type="text" name="nv_indicatif_membre" id="nv_indicatif_membre" placeholder="Nouvel indicatif">
						</td>
					</tr>

					<tr>
						<td>Date/Heure :</td>
						<td>
							<input type="text" <?php echo( $couleur_date_heure); ?> name="date_heure" id="date_heure" placeholder ="'.$placeholder_date_heure.'">
							<input id="button" type="button" value="Date et Heure actuelle" onclick="document.getElementById('date_heure').value = (DateLocale(new Date()))" />
						</td>
					</tr>

					<tr>
						<td>Système de coordonnées :</td>
						<td>
							<select name="syst_coor">
								<option value="Degré décimal">Degré Décimal</option>
								<option value="Degré minute décimal">Degré minutes décimal</option>
								<option value="Degré minute seconde">Degré mniute seconde</option>
								<option value="Lambert93">Lambert 93</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Datum :</td>
						<td>
							<select name="datum">
								<option value="WSG 84">WSG 84</option>
								<option value="ED 50">ED 50</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Latitude du relevé :</td>
						<td>
							<input type="text" name="latitude" id="latitude" placeholder="Latitude du relevé">
						</td>
					</tr>
					
					<tr>
						<td>Longitude du relevé :</td>
						<td>
							<input type="text" id="longitude" name="longitude" placeholder="Longitude du relevé">
						</td>
					</tr>
					
					<tr>
						<td>Direction du relevé :</td>
						<td>
							<input type="text" id="direction_releve" name="direction_releve" placeholder="Direction du relevé">
						</td>
					</tr>
					
					<tr>
						<td>Signal relevé :</td>
						<td>
							<input type="text" id="signal_releve" name="signal_releve" placeholder="Signal relevé">
						</td>
					</tr>
					
					<tr>
						<td>Commentaire :</td>
						<td>
							<input type="text" id="commentaire" name="commentaire" placeholder="Commentaire" style="width: 45%;">
						</td>
					</tr>
					
					<tr>
						<td class="td_submit" colspan="2">
							<input type="submit" id="valider" name="valider" value="Valider"><br /><br />
						</td>
					</tr>


					<tr width="100%">
						<td colspan="2" class="titre">Les relevés SATER</td>
					</tr>
					<tr>
						<td colspan="2">
							<div align="center">
								<table class="table1" width="150%">
									<tr>
										<th>Date/Heure</th>
										<th>Eméteur</th>
										<th>Syst. Coor.</th>
										<th>Datum</th>
										<th>Latitude</th>
										<th>Longitude</th>
										<th>Direction</th>
										<th>Signal</th>
										<th>Commentaire</th>
									</tr>
<?php
$sql = "SELECT date_heure, emeteur, syst_coor, datum, latitude, longitude, direction, signal_releve, commentaire FROM releve_sater ORDER BY `date_heure` DESC";
if ($res = $bdd->query($sql)) {

	/* Récupère le nombre de lignes qui correspond à la requête SELECT */
	if ($res->fetchColumn() > 0) {

		/* Effectue la vraie requête SELECT et travaille sur le résultat */
		$sql = "SELECT date_heure, emeteur, syst_coor, datum, latitude, longitude, direction, signal_releve, commentaire FROM releve_sater ORDER BY `date_heure` DESC";
		foreach ($bdd->query($sql) as $row) {

?>
									<tr>
										<td width="10%" class="td1"><?php echo( $row['date_heure']); ?></td>
										<td width="10%" class="td1"><?php echo( strtoupper($row['emeteur'])); ?></td>
										<td width="8%" class="td1"><?php echo( $row['syst_coor']); ?></td>
										<td width="7%" class="td1"><?php echo( $row['datum']); ?></td>
										<td width="11%" class="td1"><?php echo( $row['latitude']); ?></td>
										<td width="11%" class="td1"><?php echo( $row['longitude']); ?></td>
										<td width="8%" class="td1"><?php echo( $row['direction']); ?></td>
										<td width="8%" class="td1"><?php echo( $row['signal_releve']); ?></td>
										<td class="td1"><?php echo( $row['commentaire']); ?></td>
									</tr>
<?php
		}
	}
} ?>
								</table>
							</td>
						</tr>
					</table>
				</div>
			</table>
		</form>
	</body>
</html>
