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
    $couleur_date_heure = "bisque";
    $placeholder_date_heure = "Merci de remplir ce champ";
}
}


 ?>

<html>
<head>
		<title>Relevé SATER</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="assets/style.css">
		<script type="text/javascript">
function TD(n){

return n.toString().replace(/^(\d)$/,'0$1')
}
function DateLocale(d){
var tabJours={'fr':['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi','Dimanche']
}
var tabMois={'fr':['01', '02', '03', '04', '05', '06','07','08','09','10','11','12']
}

var SysLang=(navigator.userLanguage)?navigator.userLanguage:navigator.language;

switch (SysLang){
case ('fr'): DateLang='fr'
break;
default: DateLang='fr';
}

var Mois=tabMois[DateLang][d.getMonth()]
return d.getDate()+"/"+ Mois +"/"+d.getFullYear()+" "+TD(d.getHours())+":"+TD(d.getMinutes())
}




</script>
	</head>
<body>
	<form method="POST">
		<table width="100%">
			<tr width="100%"><td colspan="2" style="background-color: orange; color: blue;">
<div align="center"><span style="background: orange; font-size : 18px; color: blue;"><b>Informations relevé Sater</b></span></br></div>
		</td></tr>
		<form method="POST">
			<tr width="100%"><td width="30%">
				Reçu de :</td><td width="70%">
      	<select name="membre">
		<?php $sql = "SELECT id, indicatif_membre FROM membres";
if ($res = $bdd->query($sql)) {

   /* Récupère le nombre de lignes qui correspond à la requête SELECT */
   if ($res->fetchColumn() > 0) {

      /* Effectue la vraie requête SELECT et travaille sur le résultat */
      $sql = "SELECT id, indicatif_membre FROM membres";
      foreach ($bdd->query($sql) as $row) {

      echo '
      	<option value="'.$row['indicatif_membre'].'">'.strtoupper($row['indicatif_membre']).'</option>
            ';
      }
   }} ?>
   </select> <b>OU</b> <input type="text" name="nv_indicatif_membre" id="nv_indicatif_membre" placeholder="Nouvel indicatif">
      	</td></tr>

		<tr width="100%"><td width="30%">
		Date/Heure :</td><td width="70%">
		<?php echo '<input type="text" style="width : 200px; background-color:'.$couleur_date_heure.';" name="date_heure" id="date_heure" placeholder ="'.$placeholder_date_heure.'">';?> <input id="button" type="button" value="Date et Heure actuelle" onclick="document.getElementById('date_heure').value = (DateLocale(new Date()))" /></td></tr>

		<tr width="100%"><td width="30%">
		Système de coordonnées :</td><td width="70%">
		<select name="syst_coor">
      	<option value="Degré décimal">Degré Décimal</option>
      	<option value="Degré minute décimal">Degré minutes décimal</option>
      	<option value="Degré minute seconde">Degré mniute seconde</option>
      	<option value="Lambert93">Lambert 93</option>
      	</select></td></tr>

      <tr width="100%"><td width="30%">
    Datum :</td><td width="70%">
    <select name="datum">
        <option value="WSG 84">WSG 84</option>
        <option value="ED 50">ED 50</option>
        </select></td></tr>

		<tr width="100%"><td width="30%">
		Latitude du relevé :</td><td width="70%">
		<input type="text" name="latitude" id="latitude" placeholder="Latitude du relevé"></td></tr>

      	<tr width="100%"><td width="30%">
      		Longitude du relevé :
      	</td><td width="70%">
      	<input type="text" id="longitude" name="longitude" placeholder="Longitude du relevé">
      </td>
      	</tr>

      	<tr width="100%"><td width="30%">
      	Direction du relevé :
      	</td><td width="70%">
      	<input type="text" id="direction_releve" name="direction_releve" placeholder="Direction du relevé">
      </td>
      	</tr>

        <tr width="100%"><td width="30%">
        Signal relevé :
        </td><td width="70%">
        <input type="text" id="signal_releve" name="signal_releve" placeholder="Signal relevé">
      </td>
        </tr>

        <tr width="100%"><td width="30%">
        Commentaire :
        </td><td width="70%">
        <input type="text" id="commentaire" name="commentaire" placeholder="Commentaire" style="width: 45%;">
      </td>
        </tr>

		<tr width="100%"><td colspan="2">
			<div align="center"> <input type="submit" style="margin-top : 10px;" id="valider" name="valider" value="Valider"></br></br></td></div></tr>


	<tr width="100%"><td colspan="2" style="background-color: orange; color: blue;">
<div align="center"><span style="background: orange; font-size : 18px; color: blue;"><b>Les relevés SATER</b></span></br></div>
		</td></tr>
		<td colspan="2">
			<div align="center">
			<table class="table1" width="150%">
        <thead>
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
        </thead>
		<?php
		 $sql = "SELECT date_heure, emeteur, syst_coor, datum, latitude, longitude, direction, signal_releve, commentaire FROM releve_sater ORDER BY `date_heure` DESC";
if ($res = $bdd->query($sql)) {

   /* Récupère le nombre de lignes qui correspond à la requête SELECT */
   if ($res->fetchColumn() > 0) {

      /* Effectue la vraie requête SELECT et travaille sur le résultat */
      $sql = "SELECT date_heure, emeteur, syst_coor, datum, latitude, longitude, direction, signal_releve, commentaire FROM releve_sater ORDER BY `date_heure` DESC";
      foreach ($bdd->query($sql) as $row) {


      print '
      	<tr>
      	<td width="10%" class="td1">'.$row['date_heure'].'</td><td width="10%" class="td1">'.strtoupper($row['emeteur']).'</td><td width="8%" class="td1">'.$row['syst_coor'].'</td><td width ="7%" class="td1">'.$row['datum'].'</td><td width="11%" class="td1">'.$row['latitude'].'</td><td width = "11%" class="td1">'.$row['longitude'].'</td><td width = "8%" class="td1">'.$row['direction'].'</td><td width = "8%" class="td1">'.$row['signal_releve'].'</td><td class="td1">'.$row['commentaire'].'</td>
            

            </tr>';
      }
   }} ?>
</table></td></table>
		</div>
	</table>
	</form>
</body>
</html>
