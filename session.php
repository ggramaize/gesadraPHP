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
		<?php echo $script; ?>
	</head>
<body>
	<form method="POST" action="session.php">
		<!--<div align="center"><span style="background: orange; font-size : 18px; color: blue;"><b>Informations de session</b></span></br></div>
		Nom de session :
		<input type="text" name="nom_session" id="nom_session"></br>-->
		<table width="100%">
			<tr width="100%"><td width="15%">
		Type d'activation :</td><td width="85%">
		<select name="activation">
			<option value="Exercice">Exercice</option>
			<option value="Reelle">Relle</option>
		</select></td></tr>
	<tr width="100%"><td colspan="2" style="background-color: orange; color: blue;">
<div align="center"><span style="background: orange; font-size : 18px; color: blue;"><b>Station locale</b></span></br></div>
		</td></tr>
		<tr width="100%"><td width="20%">
		<label for="indicatif">Indicatif de la station :</label></td><td width="80%">
		<input type="text" name="indicatif" id="indicatif" placeholder="Indicatif de la station"></td></tr>

		<tr width="100%"><td width="20%">
		Ville :</td><td width="80%">
		<input type="text" name="ville" id="ville" placeholder ="Ville"></td></tr>

		<tr width="100%"><td width="20%">
		Département :</td><td width="80%">
		<input type="text" name="departement" id="departement" placeholder="Departement"></td></tr>

		<tr width="100%"><td width="20%">
		Service :</td><td width="80%">
		<input type="text" name="service" id="service" placeholder="Service"></td></tr>

		<tr width="100%"><td width="20%">
		Site d'implentation :</td><td width="80%">
		<input type="text" name="site_implentation" id="site_implentation" placeholder="Site d'implentation"></td></tr>

		<tr width="100%"><td colspan="2">
		<div align="center">
			<input type="submit" id="valider" name="valider" value="Valider"></td></tr>
</table>
		</div>
	</table>
	</form>
</body>
</html>