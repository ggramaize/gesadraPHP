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

  $couleur_date_heure = "white";
  $placeholder_date_heure = "Date et Heure";

if (isset($_POST['valider'])) {
	
  if (!empty($_POST['date_heure'])) {
    # code...
  
	$date_heure = ($_POST['date_heure']);
	$degre_urgence = ($_POST['degre_urgence']);
	$mode_trans = ($_POST['mode_trans']);

	if (!empty($_POST['nv_indicatif_recu_de'])) {
		$recu_de = ($_POST['nv_indicatif_recu_de']);
	}else{
		$recu_de = ($_POST['recu_de']);
	}

	if (!empty($_POST['nv_indicatif_emis_vers'])) {
		$emis_vers = ($_POST['nv_indicatif_emis_vers']);
	}else{
		$emis_vers = ($_POST['emis_vers']);
	}
	
	if(isset($_POST['message'])){
		$message = ($_POST['message']);
	}


	nouvelleMainCourante($bdd, $date_heure, $recu_de, $emis_vers, $degre_urgence, $mode_trans, $message);}
  else{
    $couleur_date_heure = "bisque";
    $placeholder_date_heure = "Merci de remplir ce champ";
}
}


 ?>

<html>
	<head>
		<title>Ajouter une main courante</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="assets/style.css" >
		<script type="text/javascript">
			function TD(n){
				return n.toString().replace(/^(\d)$/,'0$1')
			}
			function DateLocale(d){
				var tabJours={'fr':['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi','Dimanche']}
				var tabMois={'fr':['01', '02', '03', '04', '05', '06','07','08','09','10','11','12']}
			
				var SysLang=(navigator.userLanguage)?navigator.userLanguage:navigator.language;
			
				switch (SysLang){
				case ('fr'):
					DateLang='fr'
					break;
				default: 
					DateLang='fr';
				}
			
				var Mois=tabMois[DateLang][d.getMonth()];
				return d.getDate()+"/"+ Mois +"/"+d.getFullYear()+" "+TD(d.getHours())+":"+TD(d.getMinutes());
			}

			function RemplirMessage( str) {
				document.getElementById('message').value = str;
			}

			function edition()
			{
				options = "Width=700,Height=700" ;
				window.open( "impression_main_courante.php", "impression_main_courante", options ) ;
			}

		</script>
	</head>
	<body>
		<form method="POST">
		<table width="100%">
			<tr width="100%">
				<td colspan="2" class="titre">Ajouter une main courante</td>
			</tr>
			<tr width="100%">
				<td width="30%">Reçu de :</td>
				<td width="70%">
					<select name="recu_de">
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
						} 
						?>
   					</select>
					<b>OU</b> 
					<input type="text" name="nv_indicatif_recu_de" id="nv_indicatif_recu_de" placeholder="Nouvel indicatif">
				</td>
			</tr>
			<tr width="100%">
				<td width="30%">Emis vers :</td>
				<td width="70%">
					<select name="emis_vers">
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
					} 
					?>
					</select>
					<b>OU</b> 
					<input type="text" name="nv_indicatif_emis_vers" id="nv_indicatif_emis_vers" placeholder="Nouvel indicatif">
				</td>
			</tr>

			<tr width="100%">
				<td width="30%">Date/Heure :</td>
				<td width="70%">
					<input type="text" style="width : 200px; background-color:<?php echo( $couleur_date_heure); ?>;" name="date_heure" id="date_heure" placeholder ="<?php echo( $placeholder_date_heure); ?>">
					<input id="button" type="button" value="Date et Heure actuelle" onclick="document.getElementById('date_heure').value = (DateLocale(new Date()))" />
				</td>
			</tr>
	
			<tr width="100%">
				<td width="30%">Degré d'urgence :</td>
				<td width="70%">
					<select name="degre_urgence">
						<option value="Routine">Routine</option>
						<option value="Urgent">Urgent</option>
						<option value="Immediat">Immediat</option>
						<option value="Flash">Flash</option>
						<option value="Sauvetage Vie Humaine">Sauvetage Vie Humaine</option>
						<option value="Priorité Absolue">Priorité Absolue</option>
					</select>
				</td>
			</tr>
	
			<tr width="100%">
				<td width="30%">Mode de transmission :</td>
				<td width="70%">
					<select name="mode_trans">
						<option value="Radio - Phonie">Radio - Phonie</option>
						<option value="Radio - APRS">Radio - APRS</option>
						<option value="Radio - Image">Radio - Image</option>
						<option value="Radio - Mode numérique">Radio - Mode numérique</option>
						<option value="Téléphone - Filaire">Téléphone - Filaire</option>
						<option value="Téléphone - Mobile">Téléphone - Mobile</option>
						<option value="Mail">Mail</option>
						<option value="Autre">Autre</option>
					</select>
				</td>
			</tr>
			<tr width="100%">
				<td width="30%">Message :</td>
				<td width="70%">
	      				<input type="text" id="message" name="message" placeholder="Message" style="width: 90%">
				</td>
			</tr>
	
			<tr width="100%">
				<td width="30%"><b>OU</b> Message prédéfini :</td>
				<td width="70%">
					<input type="radio" name="message_pred" value="se_signale" id="se_signale" onclick="RemplirMessage('Se signale sur le réseau');">
					<label for="se_signale">Se signale</label>
	
					<input type="radio" name="message_pred" value="qrt" id="qrt" onclick="RemplirMessage('Quitte le réseau');">
					<label for="qrt">QRT</label>
	
					<input type="radio" name="message_pred" value="attente" id="attente" onclick="RemplirMessage('Attente');">
					<label for="attente">Attente</label>
	
					<input type="radio" name="message_pred" value="en_route" id="en_route" onclick="RemplirMessage('En route vers');">
					<label for="en_route" >En route...</label>
	
					<input type="radio" name="message_pred" value="arrive" id="arrive" onclick="RemplirMessage('Arrivé sur les lieux');">
					<label for="arrive">Arrivé</label>
					
					<input type="radio" name="message_pred" value="essai_radio" id="essai_radio" onclick="RemplirMessage('Appel pour contrôle de la liaison radio');">
					<label for="essai_radio">Essai radio</label>
					
					<input type="radio" name="message_pred" value="disponbile" id="disponible" onclick="RemplirMessage('De nouveau disponible');">
					<label for="disponible">Disponible</label>
					
					<input type="radio" name="message_pred" value="indisponible" id="indisponible" onclick="RemplirMessage('Momentanement indisponible');">
					<label for="indisponible">Indisponible</label>
					
					<input type="radio" name="message_pred" value="qsp" id="qsp" onclick="RemplirMessage('Demande autorisation pour appeler directement')" onclick="RemplirMessage('En route vers');">
					<label for="qsp">QSP...</label>
					
					<input type="radio" name="message_pred" value="aucun_choix" id="aucun_choix">
					<label for="aucun_choix">Aucun choix</label>
				</td>
			</tr>
	
			<tr width="100%">
				<td colspan="2">
					<div align="center">
						<input type="submit" style="margin-top : 10px;" id="valider" name="valider" value="Valider"><br />
						<br />
					</div>
				</td>
			</tr>
	
	
			<tr width="100%">
				<td colspan="2" class="titre">Dernières transmissions enregistrées<br /></td>
			</tr>
			<tr>
				<td colspan="2">
					<div align="center">
						<table class="table1" width="100%">
							<tr>
								<a href="impression_main_courante.php" onclick="edition();return false;">Imprimer la liste</a>
							</tr>
							<tr>
								<th>Date/Heure</th>
								<th>De...</th>
								<th>À...</th>
								<th>Degré d'urgence</th>
								<th>Mode de trans.</th>
								<th>Message</th>
							</tr>
<?php
$sql = "SELECT date_heure, recu_de, emis_vers, degre_urgence, mode_transmission, message FROM main_courante ORDER BY `date_heure` DESC";
if ($res = $bdd->query($sql)) {

	/* Récupère le nombre de lignes qui correspond à la requête SELECT */
	if ($res->fetchColumn() > 0) {

		/* Effectue la vraie requête SELECT et travaille sur le résultat */
		$sql = "SELECT date_heure, recu_de, emis_vers, degre_urgence, mode_transmission, message FROM main_courante ORDER BY `date_heure` DESC";
		foreach ($bdd->query($sql) as $row) {
			switch( $row['degre_urgence']) {
			case 'Urgent':
				$tr_class = 'prio_urgent';
				break;

			case 'Immediat':
				$tr_class = 'prio_immediat';
				break;

			case 'Flash':
				$tr_class = 'prio_flash';
				break;

			case 'Sauvetage Vie Humaine':
				$tr_class = 'prio_sauvetage';
				break;

			case 'Priorité Absolue':
				$tr_class = 'prio_absolue';
				break;

			case 'Routine':
			default:
				$tr_class = 'prio_routine';
			}
?>
 
			<tr class="<?php echo( $tr_class); ?>">
				<td width="16%" class="td1"><?php echo( $row['date_heure']); ?></td>
				<td width="8%"  class="td1"><?php echo( strtoupper($row['recu_de'])); ?></td>
				<td width="8%"  class="td1"><?php echo( strtoupper($row['emis_vers'])); ?></td>
				<td width="15%" class="td1"><?php echo( $row['degre_urgence']); ?></td>
				<td width="20%" class="td1"><?php echo( $row['mode_transmission']); ?></td>
				<td width="33%" class="td1"><?php echo( $row['message']); ?></td>
			</tr>
<?php
		}
	}
} ?>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
