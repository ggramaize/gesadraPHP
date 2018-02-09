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

$script="";
if (isset($_POST['valider'])) {
	// $nom = ($_POST['nom_session']);
	$type_activation = ($_POST['activation']);
	$indicatif_station = ($_POST['indicatif']);
	$ville = ($_POST['ville']);
	$departement = ($_POST['departement']);
	$service = ($_POST['service']);
	$site_implentation = ($_POST['site_implentation']);

	envoiTypeActivation($bdd, $type_activation);
	envoiStationLocale($bdd, $indicatif_station, $ville, $service, $departement, $site_implentation);
	

        $script = '<script type="text/javascript">
		
		window.top.location.reload();
		
		</script>';
}
 ?>

<html>
	<head>
		<title>Informations de session</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="assets/style.css">
		<?php echo( $script); ?>
	</head>
	<body>
		<form method="POST" action="session.php">
			<table class="formfield">
				<tr>
					<td colspan="2" class="titre">Informations de session</td>
				</tr>
				<!--
				<tr>
					<td>Nom de session</td>
					<td>
						<input type="text" name="nom_session" id="nom_session">
						
					</td>
				</tr>
				-->
				<tr>
					<td>Type d'activation :</td>
					<td>
						<select name="activation">
							<option value="Exercice">Exercice</option>
							<option value="Reelle">Relle</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<td colspan="2" class="titre">Station locale</td>
				</tr>
	
				<tr>
					<td><label for="indicatif">Indicatif de la station :</label></td>
					<td>
						<input type="text" name="indicatif" id="indicatif" placeholder="Indicatif de la station">
					</td>
				</tr>
		
				<tr>
					<td>Ville :</td>
					<td>
						<input type="text" name="ville" id="ville" placeholder ="Ville">
					</td>
				</tr>
		
				<tr>
					<td>Département :</td>
					<td>
						<input type="text" name="departement" id="departement" placeholder="Departement">
					</td>
				</tr>
		
				<tr>
					<td>Service :</td>
					<td>
						<input type="text" name="service" id="service" placeholder="Service">
					</td>
				</tr>
		
				<tr>
					<td>Site d'implentation :</td>
					<td>
						<input type="text" name="site_implentation" id="site_implentation" placeholder="Site d'implentation">
					</td>
				</tr>
		
				<tr>
					<td colspan="2" class="td_submit">
						<input type="submit" id="valider" name="valider" value="Valider">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
