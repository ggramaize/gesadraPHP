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


//FIXME: réviser le mode d'édition et retirer cette limitation à 50 membres.
for( $i=1; $i<51; ++$i) {
	editMembreSiExiste( $i);
}

?>

<html>
<head>
		<title>Edition des membres</title>
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
	
		
		<table width="202%">
		<tr width="100%"><td style="background-color: orange; color:blue;" width="100%">
			<div style="margin-left: 200px;"><span style="font-size : 18px;"><b>Edition de la liste des membres</b></span> <span style="font-size : 14px;">(Edition : un membre à la fois)</span></div>
</td></tr>
<tr><td>
	<form method="POST" action="nouveau-membre.php">
	<div style="margin-left : 20px; margin-top : 5px;"> <input type="submit" id="nouveau_membre" name="nouveau_membre" value="Ajouter un membre"></div>
</form></td></tr>
	</table>

	<div align="center">
		<table class="table1" width="180%">
			<form method="POST">
      <thead>
      <tr>
      <th class="th1">ID</th>
      <th class="th1">NOM</th>
      <th class="th1">Prénom</th>
      <th class="th1">Indicatif</th>
      <th class="th1">Tel fixe Perso</th>
      <th class="th1">Tel Port Perso</th>
      <th class="th1">Mail Perso</th>
      <th class="th1">Tel fixe Pro</th>
      <th class="th1">Tel Port Pro</th>
      <th class="th1">Mail Pro</th>
      <th class="th1">XXXX</th>
      </tr>
      </thead>
<?php $sql = "SELECT id, nom_membre, prenom_membre, indicatif_membre, tel_fixe_perso, tel_portable_perso, mail_perso, tel_fixe_pro, tel_portable_pro, mail_pro FROM membres";
if ($res = $bdd->query($sql)) {

   /* Récupère le nombre de lignes qui correspond à la requête SELECT */
   if ($res->fetchColumn() > 0) {

      /* Effectue la vraie requête SELECT et travaille sur le résultat */
      $sql = "SELECT id, nom_membre, prenom_membre, indicatif_membre, tel_fixe_perso, tel_portable_perso, mail_perso, tel_fixe_pro, tel_portable_pro, mail_pro FROM membres";
      foreach ($bdd->query($sql) as $row) {
      	
      print '
      	<tr>
      	<td class="td1">
      	'.$row['id'].'
      	</td><td class="td1">
      	<input type="text" id="nom_'.$row['id'].'" name="nom_'.$row['id'].'" value="'.strtoupper($row['nom_membre']).'">
      	</td><td class="td1">
      	<input type="text" id="prenom_'.$row['id'].'" name="prenom_'.$row['id'].'" value="'.ucfirst($row['prenom_membre']).'">	
      	</td><td class="td1">
      	<input type="text" id="indicatif_'.$row['id'].'" name="indicatif_'.$row['id'].'" value="'.$row['indicatif_membre'].'">
      	</td><td class="td1">
      	<input type="text" id="fixe_perso_'.$row['id'].'" name="fixe_perso_'.$row['id'].'" value="'.$row['tel_fixe_perso'].'">
      	</td><td class="td1">
      	<input type="text" id="port_perso_'.$row['id'].'" name="port_perso_'.$row['id'].'" value="'.$row['tel_portable_perso'].'">
      	</td><td class="td1">
      	<input type="text" id="mail_perso_'.$row['id'].'" name="mail_perso_'.$row['id'].'" value="'.$row['mail_perso'].'">
      	</td><td class="td1">
      	<input type="text" id="fixe_pro_'.$row['id'].'" name="fixe_pro_'.$row['id'].'" value="'.$row['tel_fixe_pro'].'">
      	</td><td class="td1">
      	<input type="text" id="port_pro_'.$row['id'].'" name="port_pro_'.$row['id'].'" value="'.$row['tel_portable_pro'].'">
      	</td><td class="td1">
      	<input type="text" id="mail_pro_'.$row['id'].'" name="mail_pro_'.$row['id'].'" value="'.$row['mail_pro'].'">
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
