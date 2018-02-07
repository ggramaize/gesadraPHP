<?php
include_once('./parametres.php');
try
{
    $bdd = new PDO( DB_PDO_DSN, DB_USERNAME, DB_PASSWORD);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
} ?>
<html>
	<head>
		<title>Impression de la liste des membres</title>
		<meta charset="UTF-8">

		<style type="text/css">
		.variable{
				font-family: Courier;
				font-type: monospace;
			}
		</style>
	</head>
	<body>
<?php

$sql = "SELECT id, nom_membre, prenom_membre, indicatif_membre, tel_fixe_perso, tel_portable_perso, mail_perso, tel_fixe_pro, tel_portable_pro, mail_pro FROM membres";
if ($res = $bdd->query($sql)) {

	/* Récupère le nombre de lignes qui correspond à la requête SELECT */
	if ($res->fetchColumn() > 0) {

	/* Effectue la vraie requête SELECT et travaille sur le résultat */
	$sql = "SELECT id, nom_membre, prenom_membre, indicatif_membre, tel_fixe_perso, tel_portable_perso, mail_perso, tel_fixe_pro, tel_portable_pro, mail_pro FROM membres";
	foreach ($bdd->query($sql) as $row) {
		?>
		<b>NOM : </b><span class="variable"><?php echo( strtoupper($row['nom_membre'])); ?></span><br />
		<b>Prénom : </b><span class="variable"><?php echo( ucfirst($row['prenom_membre'])); ?><span></br>
		<b>Indicatif : </b><span class="variable"><?php echo( $row['indicatif_membre']); ?><span></br>
		<b>Tel fixe personnel : </b><span class="variable"><?php echo( $row['tel_fixe_perso']); ?><span></br>
		<b>Tel portable personnel : </b><span class="variable"><?php echo( $row['tel_portable_perso']); ?><span></br>
		<b>Mail personnel : </b><span class="variable"><?php echo( $row['mail_perso']); ?><span></br>
		<b>Tel fixe professionnel : </b><span class="variable"><?php echo( $row['tel_fixe_pro']); ?><span></br>
		<b>Tel portable professionnel : </b><span class="variable"><?php echo( $row['tel_portable_pro']); ?><span></br>
		<b>Mail professionnel : </b><span class="variable"><?php echo( $row['mail_pro']); ?><span></br>
		</br>
		******************************</br>
		</br>
<?php
		}
	}
} ?>

		<script type="text/javascript">
			window.print() ;
		</script>
	</body>
</html>
