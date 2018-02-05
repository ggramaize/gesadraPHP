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


if (isset($_POST['1'])) {
	$d = 1;
	$indicatif = ($_POST['indicatif_1']);
	$alias_tactique = ($_POST['alias_1']);
	$operateur = ($_POST['operateur_1']);
	$etat = ($_POST['etat_1']);
	
	$commentaire = ($_POST['commentaire_1']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['2'])) {
	$d = 2;
	$indicatif = ($_POST['indicatif_2']);
	$alias_tactique = ($_POST['alias_2']);
	$operateur = ($_POST['operateur_2']);
	$etat = ($_POST['etat_2']);
	
	$commentaire = ($_POST['commentaire_2']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['3'])) {
	$d = 3;
	$indicatif = ($_POST['indicatif_3']);
	$alias_tactique = ($_POST['alias_3']);
	$operateur = ($_POST['operateur_3']);
	$etat = ($_POST['etat_3']);
	
	$commentaire = ($_POST['commentaire_3']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['4'])) {
	$d = 4;
	$indicatif = ($_POST['indicatif_4']);
	$alias_tactique = ($_POST['alias_4']);
	$operateur = ($_POST['operateur_4']);
	$etat = ($_POST['etat_4']);
	$commentaire = ($_POST['commentaire_4']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['5'])) {
	$d = 5;
	$indicatif = ($_POST['indicatif_5']);
	$alias_tactique = ($_POST['alias_5']);
	$operateur = ($_POST['operateur_5']);
	$etat = ($_POST['etat_5']);
	$commentaire = ($_POST['commentaire_5']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['6'])) {
	$d = 6;
	$indicatif = ($_POST['indicatif_6']);
	$alias_tactique = ($_POST['alias_6']);
	$operateur = ($_POST['operateur_6']);
	$etat = ($_POST['etat_6']);
	
	$commentaire = ($_POST['commentaire_6']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['7'])) {
	$d = 7;
	$indicatif = ($_POST['indicatif_7']);
	$alias_tactique = ($_POST['alias_7']);
	$operateur = ($_POST['operateur_7']);
	$etat = ($_POST['etat_7']);
	$commentaire = ($_POST['commentaire_7']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['8'])) {
	$d = 8;
	$indicatif = ($_POST['indicatif_8']);
	$alias_tactique = ($_POST['alias_8']);
	$operateur = ($_POST['operateur_8']);
	$etat = ($_POST['etat_8']);
	$commentaire = ($_POST['commentaire_8']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['9'])) {
	$d = 9;
	$indicatif = ($_POST['indicatif_9']);
	$alias_tactique = ($_POST['alias_9']);
	$operateur = ($_POST['operateur_9']);
	$etat = ($_POST['etat_9']);
	$commentaire = ($_POST['commentaire_9']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['10'])) {
	$d = 10;
	$indicatif = ($_POST['indicatif_10']);
	$alias_tactique = ($_POST['alias_10']);
	$operateur = ($_POST['operateur_10']);
	$etat = ($_POST['etat_10']);
	$commentaire = ($_POST['commentaire_10']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['11'])) {
	$d = 11;
	$indicatif = ($_POST['indicatif_11']);
	$alias_tactique = ($_POST['alias_11']);
	$operateur = ($_POST['operateur_11']);
	$etat = ($_POST['etat_11']);
	$commentaire = ($_POST['commentaire_11']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['12'])) {
	$d = 12;
	$indicatif = ($_POST['indicatif_12']);
	$alias_tactique = ($_POST['alias_12']);
	$operateur = ($_POST['operateur_12']);
	$etat = ($_POST['etat_12']);
	$commentaire = ($_POST['commentaire_12']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['13'])) {
	$d = 13;
	$indicatif = ($_POST['indicatif_13']);
	$alias_tactique = ($_POST['alias_13']);
	$operateur = ($_POST['operateur_13']);
	$etat = ($_POST['etat_13']);
	$commentaire = ($_POST['commentaire_13']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['14'])) {
	$d = 14;
	$indicatif = ($_POST['indicatif_14']);
	$alias_tactique = ($_POST['alias_14']);
	$operateur = ($_POST['operateur_14']);
	$etat = ($_POST['etat_14']);
	$commentaire = ($_POST['commentaire_14']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['15'])) {
	$d = 15;
	$indicatif = ($_POST['indicatif_15']);
	$alias_tactique = ($_POST['alias_15']);
	$operateur = ($_POST['operateur_15']);
	$etat = ($_POST['etat_15']);
	$commentaire = ($_POST['commentaire_15']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['16'])) {
	$d = 16;
	$indicatif = ($_POST['indicatif_16']);
	$alias_tactique = ($_POST['alias_16']);
	$operateur = ($_POST['operateur_16']);
	$etat = ($_POST['etat_16']);
	$commentaire = ($_POST['commentaire_16']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['17'])) {
	$d = 17;
	$indicatif = ($_POST['indicatif_17']);
	$alias_tactique = ($_POST['alias_17']);
	$operateur = ($_POST['operateur_17']);
	$etat = ($_POST['etat_17']);
	$commentaire = ($_POST['commentaire_17']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['18'])) {
	$d = 18;
	$indicatif = ($_POST['indicatif_18']);
	$alias_tactique = ($_POST['alias_18']);
	$operateur = ($_POST['operateur_18']);
	$etat = ($_POST['etat_18']);
	$commentaire = ($_POST['commentaire_18']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['19'])) {
	$d = 19;
	$indicatif = ($_POST['indicatif_19']);
	$alias_tactique = ($_POST['alias_19']);
	$operateur = ($_POST['operateur_19']);
	$etat = ($_POST['etat_19']);
	$commentaire = ($_POST['commentaire_19']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['20'])) {
	$d = 20;
	$indicatif = ($_POST['indicatif_20']);
	$alias_tactique = ($_POST['alias_20']);
	$operateur = ($_POST['operateur_20']);
	$etat = ($_POST['etat_20']);
	$commentaire = ($_POST['commentaire_20']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['21'])) {
	$d = 21;
	$indicatif = ($_POST['indicatif_21']);
	$alias_tactique = ($_POST['alias_21']);
	$operateur = ($_POST['operateur_21']);
	$etat = ($_POST['etat_21']);
	$commentaire = ($_POST['commentaire_21']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['22'])) {
	$d = 22;
	$indicatif = ($_POST['indicatif_22']);
	$alias_tactique = ($_POST['alias_22']);
	$operateur = ($_POST['operateur_22']);
	$etat = ($_POST['etat_22']);
	$commentaire = ($_POST['commentaire_22']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['23'])) {
	$d = 23;
	$indicatif = ($_POST['indicatif_23']);
	$alias_tactique = ($_POST['alias_23']);
	$operateur = ($_POST['operateur_23']);
	$etat = ($_POST['etat_23']);
	$commentaire = ($_POST['commentaire_23']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['24'])) {
	$d = 24;
	$indicatif = ($_POST['indicatif_24']);
	$alias_tactique = ($_POST['alias_24']);
	$operateur = ($_POST['operateur_24']);
	$etat = ($_POST['etat_24']);
	$commentaire = ($_POST['commentaire_24']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}
if (isset($_POST['25'])) {
	$d = 25;
	$indicatif = ($_POST['indicatif_25']);
	$alias_tactique = ($_POST['alias_25']);
	$operateur = ($_POST['operateur_25']);
	$etat = ($_POST['etat_25']);
	$commentaire = ($_POST['commentaire_25']);

	editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d);
}



 ?>

<html>
<head>
		<title>Edition des membres réseau</title>
		<meta charset="UTF-8">
<style type="text/css">
.table1
{
    border-collapse: collapse;
}
.td1, .th1
{
    border: 1px solid black;
}
</style>
	</head>
<body>
	
		
		<table width="140%">
		<tr width="100%"><td style="background-color: orange; color:blue;" width="100%">
			<div style="margin-left: 200px;"><span style="font-size : 18px;"><b>Edition de la liste des membres réseau</b></span> <span style="font-size : 14px;">(Edition : un membre à la fois)</span></div>
</td></tr>
<tr><td>
	<form method="POST" action="nouveau-membre-reseau.php">
	<div style="margin-left : 20px; margin-top : 5px;"> <input type="submit" id="nouveau_membre" name="nouveau_membre" value="Ajouter un membre réseau"></div>
</form></td></tr>
	</table>

	<div align="center">
		<table class="table1" width="140%">
			<form method="POST">
      <thead>
      <tr>
      <th class="th1">ID</th>
      <th class="th1">Indicatif</th>
      <th class="th1">Alias tactique</th>
      <th class="th1">Opérateur</th>
      <th class="th1">Etat</th>
      <th class="th1">Commentaire</th>
      <th class="th1">XXXX</th>
      </tr>
      </thead>
<?php $sql = "SELECT id, indicatif, alias_tactique, operateur, etat, commentaire FROM membres_reseau";
if ($res = $bdd->query($sql)) {

   /* Récupère le nombre de lignes qui correspond à la requête SELECT */
   if ($res->fetchColumn() > 0) {

      /* Effectue la vraie requête SELECT et travaille sur le résultat */
      $sql = "SELECT id, indicatif, alias_tactique, operateur, etat, commentaire FROM membres_reseau";
      foreach ($bdd->query($sql) as $row) {

      	$selectActif = '';
      	$selectInactif = '';
      	$selectRepos = '';
      	$selectIndispo = '';

         if ($row['etat'] =="actif") {
            $selectActif = 'selected = "select"';
         }
         elseif ($row['etat'] == "inactif") {
            $selectInactif = 'selected = "select"';
         }
         elseif ($row['etat'] == "repos") {
         	$selectRepos = 'selected = "select"';
         }
		 elseif ($row['etat'] == "indisponible") {
         	$selectIndispo = 'selected = "select"';
         }

      print '
      	<tr>
      	<td class="td1">
      	'.$row['id'].'
      	</td><td class="td1">
      	<input type="text" id="indicatif_'.$row['id'].'" name="indicatif_'.$row['id'].'" value="'.strtoupper($row['indicatif']).'">
      	</td><td class="td1">
      	<input type="text" id="alias_'.$row['id'].'" name="alias_'.$row['id'].'" value="'.$row['alias_tactique'].'">	
      	</td><td class="td1">
      	<input type="text" id="operateur_'.$row['id'].'" name="operateur_'.$row['id'].'" value="'.$row['operateur'].'">
      	</td><td class="td1">

      	<select name="etat_'.$row['id'].'">
      	<option value="actif"  style="background-color: green;" '.$selectActif.'>Actif</option>
      	<option value="inactif" style="background-color: orangered;" '.$selectInactif.'>Inactif</option>
      	<option value="repos" style="background-color: dodgerblue;" '.$selectRepos.'>Repos</option>
      	<option value="indisponible" style="background-color: red;" '.$selectIndispo.'>Indisponible</option>
      	</select>

      	</td><td class="td1">
      	<input type="text" id="commentaire_'.$row['id'].'" name="commentaire_'.$row['id'].'" value="'.$row['commentaire'].'">
      	</td><td class="td1">
      	<input type="submit" id="'.$row['id'].'" name="'.$row['id'].'" value="Valider">
      	</td>
      	</tr>
            ';
      }
   }} ?>
</form>
   </table>
</div>
 

	
</body>
</html>