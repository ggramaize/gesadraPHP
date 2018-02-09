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

// FIXME: réviser le mode d'édition et retirer cette limitation à 25 membres de réseau.
for( $i=1; $i<26; ++$i) {
	editMembreReseauSiExiste( $i);
}

 ?>

<html>
<head>
		<title>Edition des membres réseau</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="assets/style.css">
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
      <th>ID</th>
      <th>Indicatif</th>
      <th>Alias tactique</th>
      <th>Opérateur</th>
      <th>Etat</th>
      <th>Commentaire</th>
      <th>XXXX</th>
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
