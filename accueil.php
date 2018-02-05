<?php
$page="";
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=gesadra;charset=utf8', 'root', '');
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
		<meta charset="UTF-8">
		<style type="text/css">
		.container_menu1{
			margin: 10px;
			margin-top: 25px;
			position: absolute;
			width: 32%;
		}
		.container_menu2{
			margin: 10px;
			margin-top: 25px;
			position: absolute;
			width: 62%;
		}

		.aff_heure{
			font-size: 18px;
			position: absolute;
			left: 110px;
			top: 5px;
			font
		}
		.variable_session{
			font-family: Courier;
			font-type: monospace;
		}
		.tr_titre {

		width: 100%;
		}
		.td_titre {

		width: 100%;

		}
		.membres{
			display: inline;
		}

		</style>

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
		<b><div id="afficherheure" class="aff_heure"></div></b>
<div class="container_menu1">
	<table width="100%">
	<tr class="tr_titre">
	<td class="td_titre" colspan="2" style="background-color: orange;">
<div align="center">
<span style="font-size : 18px; color: blue;"><b>Informations</b></span></div>
	</td>
	</tr>

	<tr class="tr_titre"><td colspan="2" class="td_titre">
<b>Indicatif : </b><span class="variable_session"><?php echo $indicatif_station; ?></span>
<span style="float: right;"><b>Service : </b><span class="variable_session"><?php echo $service; ?></span></span>
	</td>
	</tr>

	<tr class="tr_titre"><td colspan="2" class="td_titre">
<b>Activation : </b><span class="variable_session"><?php echo $type_activation; ?></span>
</br>
	</td>
	</tr><tr class="tr_titre"><td colspan="2" class="td_titre">
	<b>Localisation : </b><span class="variable_session"><?php echo $ville," ","(", $departement,")"; ?></span>
	</td>
	</tr><tr class="tr_titre"><td colspan="2" class="td_titre">
	<b>Site d'implentation : </b><span class="variable_session"><?php echo $site_implentation; ?></span>
	</td></tr>
	<tr class="tr_titre"><td colspan="2" class="td_titre">
<div align="center"><form method="POST"><input type="submit" id="entrer_infos" name="entrer_infos" value="Renseigner"></form></div>
	</td></tr>

	<tr class="tr_titre">
	<td class="td_titre" colspan="2" style="background-color: orange;">
<div align="center">
<span style="font-size : 18px; color: blue;"><b>Membres</b></span></div>
	</td>
	</tr>
	<tr class="tr_titre">
	<td width="50%">
		<div align="center"><form method="POST"><input style="width:95%;" type="submit" id="voir_membres" name="voir_membres" value="Voir les membres"></form></div></td><td width="50%">
		<div align="center"><form method="POST"><input style="width:95%;" type="submit" id="edit_membres" name="edit_membres" value="Editer les membres"></form></div></td>
</td>
	</tr>
<tr class="tr_titre">
	<td class="td_titre" colspan="2" style="background-color: orange;">
<div align="center">
<span style="font-size : 18px; color: blue;"><b>Membres Réseau</b></span></div>
</td></tr>
<tr class="tr_titre">
<td width="50%">
		<div align="center"><form method="POST"><input style="width:95%;" type="submit" id="voir_membres_reseau" name="voir_membres_reseau" value="Voir les membres réseau"></form></div></td><td width="50%">
		<div align="center"><form method="POST"><input style="width:95%;" type="submit" id="edit_membres_reseau" name="edit_membres_reseau" value="Editer les membres réseau"></form></div></td>
</td>
</tr>
<tr class="tr_titre">
	<td class="td_titre" colspan="2" style="background-color: orange;">
<div align="center">
<span style="font-size : 18px; color: blue;"><b>Mains courantes</b></span></div>
</td></tr>
<tr class="tr_titre">
<td colspan="2">
		<div align="center"><form method="POST"><input style="width:95%;" type="submit" id="main_courante" name="main_courante" value="Gestion des mains courantes"></form></div></td>
</td>
</tr>
<tr class="tr_titre">
	<td class="td_titre" colspan="2" style="background-color: orange;">
<div align="center">
<span style="font-size : 18px; color: blue;"><b>Relevés</b></span></div>
</td></tr>
<tr class="tr_titre">
<td width="50%">
		<div align="center"><form method="POST"><input style="width:95%;" type="submit" id="releve_sater" name="releve_sater" value="Relevé SATER"></form></div></td><td width="50%">
		<div align="center"><form method="POST"><input style="width:95%;" type="submit" id="releve_point_part" name="releve_point_part" value="Relevé Point Particulier"></form></div></td>
</td>
</tr>

	</table>



</div>
	</td><td width="65%">
<div class="container_menu2">

<?php echo '<iframe src="'.$page.'" width="100%" style="border:none;" height="570"></iframe>'?>
<?php
if ($page != "") {
	echo '<div align="center"><form metehod="post" action=""><input type="submit" id="fermer_iframe" name="fermer_iframe" value="Fermer"></form></div>';
}
 ?>

</div>
</td></tr>

</table>




	</body>
</html>