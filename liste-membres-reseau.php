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


 ?>

<html>
<head>
		<title>Liste des membres réseau</title>
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
<script type="text/javascript">
function edition()
    {
    options = "Width=700,Height=700" ;
    window.open( "impression_liste_membres_reseau.php", "impression_liste_membres_reseau", options ) ;
    }
</script>
	</head>
<body>
	
		
		<table width="130%">
		<tr width="100%"><td style="background-color: orange; color:blue;" width="100%">
			<div style="margin-left: 250px;"><span style="font-size : 18px;"><b>Liste des membres réseau</b></span></br></div>
</td></tr>
	</table>

	<div align="center">
		<table class="table1" width="130%">
      <thead>
      <tr>
      <th class="th1">ID</th>
      <th class="th1">Indicatif</th>
      <th class="th1">Alias tactique</th>
      <th class="th1">Opérateur</th>
      <th class="th1">Etat</th>
      <th class="th1">Commentaire</th>
      </tr>
      </thead>
      <tr>
      <a href="impression_liste_membres_reseau.php" onclick="edition();return false;">Imprimer la liste</a>
      </tr>
<?php $sql = "SELECT id, indicatif, alias_tactique, operateur, etat, commentaire FROM membres_reseau";
if ($res = $bdd->query($sql)) {

   /* Récupère le nombre de lignes qui correspond à la requête SELECT */
   if ($res->fetchColumn() > 0) {

      /* Effectue la vraie requête SELECT et travaille sur le résultat */
      $sql = "SELECT id, indicatif, alias_tactique, operateur, etat, commentaire FROM membres_reseau";
      foreach ($bdd->query($sql) as $row) {
         if ($row['etat'] =="actif") {
            $couleur ="green";
         }elseif ($row['etat'] == "inactif") {
            $couleur = "orangered";
         }elseif ($row['etat'] == "repos") {
            $couleur = "dodgerblue";
         }elseif ($row['etat'] == "indisponible") {
            $couleur = "red";
         }
      print '
      	<tr>
      	<td class="td1">
      	'.$row['id'].'
      	</td><td class="td1">
      	'.strtoupper($row['indicatif']).'
      	</td><td class="td1">
      	'.$row['alias_tactique'].'
      	</td><td class="td1">
      	'.$row['operateur'].'
      	</td><td class="td1" style ="background-color : '.$couleur.';">
      	'.$row['etat'].'
      	</td><td class="td1">
      	'.$row['commentaire'].'
      	</td>
      	</tr>
            ';
      }
   }} ?>
   </table>
</div>
 

	
</body>
</html>