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
		<link rel="stylesheet" type="text/css" href="assets/style.css" >
	</head>
	<body>
		<table width="202%">
			<tr width="100%">
				<td style="background-color: orange; color:blue;" width="100%">
					<div style="margin-left: 200px;">
						<span style="font-size : 18px;"><b>Edition de la liste des membres</b></span>
						<span style="font-size : 14px;">(Edition : un membre à la fois)</span>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<form method="POST" action="nouveau-membre.php">
						<div style="margin-left : 20px; margin-top : 5px;">
							<input type="submit" id="nouveau_membre" name="nouveau_membre" value="Ajouter un membre">
						</div>
					</form>
				</td>
			</tr>
		</table>

		<div align="center">
			<table class="table1" width="180%">
				<form method="POST">
					<tr>
						<th>ID</th>
						<th>NOM</th>
						<th>Prénom</th>
						<th>Indicatif</th>
						<th>Tel fixe Perso</th>
						<th>Tel Port Perso</th>
						<th>Mail Perso</th>
						<th>Tel fixe Pro</th>
						<th>Tel Port Pro</th>
						<th>Mail Pro</th>
						<th>XXXX</th>
					</tr>
<?php $sql = "SELECT id, nom_membre, prenom_membre, indicatif_membre, tel_fixe_perso, tel_portable_perso, mail_perso, tel_fixe_pro, tel_portable_pro, mail_pro FROM membres";
if ($res = $bdd->query($sql)) {

   /* Récupère le nombre de lignes qui correspond à la requête SELECT */
   if ($res->fetchColumn() > 0) {

      /* Effectue la vraie requête SELECT et travaille sur le résultat */
      $sql = "SELECT id, nom_membre, prenom_membre, indicatif_membre, tel_fixe_perso, tel_portable_perso, mail_perso, tel_fixe_pro, tel_portable_pro, mail_pro FROM membres";
      foreach ($bdd->query($sql) as $row) {
?>	
<tr>
	<td class="td1"><?php echo( $row['id']); ?></td>
	<td class="td1">
		<input type="text" id="<?php echo( 'nom_'.$row['id']); ?>" name="<?php echo( 'nom_'.$row['id']); ?>" value="<?php echo( strtoupper($row['nom_membre'])); ?>">
	</td>
	<td class="td1">
	<input type="text" id="<?php echo( 'prenom_'.$row['id']); ?>" name="<?php echo( 'prenom_'.$row['id']); ?>" value="<?php echo( ucfirst($row['prenom_membre'])); ?>">	
	</td>
	<td class="td1">
		<input type="text" id="<?php echo( 'indicatif_'.$row['id']); ?>" name="<?php echo( 'indicatif_'.$row['id']); ?>" value="<?php echo( $row['indicatif_membre']); ?>">
	</td>
	<td class="td1">
		<input type="text" id="<?php echo( 'fixe_perso_'.$row['id']); ?>" name="<?php echo( 'fixe_perso_'.$row['id']); ?>" value="<?php echo( $row['tel_fixe_perso']); ?>">
	</td>
	<td class="td1">
		<input type="text" id="<?php echo( 'port_perso_'.$row['id']); ?>" name="<?php echo( 'port_perso_'.$row['id']); ?>" value="<?php echo( $row['tel_portable_perso']); ?>">
	</td>
	<td class="td1">
		<input type="text" id="<?php echo( 'mail_perso_'.$row['id']); ?>" name="<?php echo( 'mail_perso_'.$row['id']); ?>" value="<?php echo($row['mail_perso']); ?>">
	</td>
	<td class="td1">
		<input type="text" id="<?php echo( 'fixe_pro_'.$row['id']); ?>" name="<?php echo( 'fixe_pro_'.$row['id']); ?>" value="<?php echo( $row['tel_fixe_pro']); ?>">
	</td>
	<td class="td1">
		<input type="text" id="<?php echo( 'port_pro_'.$row['id']); ?>" name="<?php echo( 'port_pro_'.$row['id']); ?>" value="<?php echo( $row['tel_portable_pro']); ?>">
	</td>
	<td class="td1">
		<input type="text" id="<?php echo( 'mail_pro_'.$row['id']); ?>" name="<?php echo( 'mail_pro_'.$row['id']); ?>" value="<?php echo( $row['mail_pro']); ?>">
	</td>
	<td class="td1">
		<input type="submit" id="<?php echo( $row['id']); ?>" name="<?php echo( $row['id']); ?>" value="Valider">
	</td>
</tr>
<?php
		}
	}
} ?>
				</form>
			</table>
		</div>
	</body>
</html>
