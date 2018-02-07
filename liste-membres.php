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
	<title>Edition des membres</title>
	<meta charset="UTF-8" />
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
	    window.open( "impression_liste_membres.php", "impression_liste_membres", options ) ;
	    }
	</script>
	</head>
	<body>
		<table width="180%">
			<tr width="100%">
				<td style="background-color: orange; color:blue;" width="100%">
					<div style="margin-left: 250px;"><span style="font-size : 18px;"><b>Liste des membres</b></span></br></div>
				</td>
			</tr>
		</table>

		<div align="center">
		<table class="table1" width="180%">
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
				</tr>
			</thead>
			<tr>
				<a href="impression_liste_membres.php" onclick="edition();return false;">Imprimer la liste</a>
			</tr>
<?php 

$sql = "SELECT id, nom_membre, prenom_membre, indicatif_membre, tel_fixe_perso, tel_portable_perso, mail_perso, tel_fixe_pro, tel_portable_pro, mail_pro FROM membres";
if ($res = $bdd->query($sql)) {

	/* Récupère le nombre de lignes qui correspond à la requête SELECT */
	if ($res->fetchColumn() > 0) {

		/* Effectue la vraie requête SELECT et travaille sur le résultat */
		$sql = "SELECT id, nom_membre, prenom_membre, indicatif_membre, tel_fixe_perso, tel_portable_perso, mail_perso, tel_fixe_pro, tel_portable_pro, mail_pro FROM membres";
		foreach ($bdd->query($sql) as $row) {
?>
			<tr>
				<td class="td1"><?php echo( $row['id']); ?></td>
				<td class="td1"><?php echo( strtoupper( $row['nom_membre'])); ?></td>
				<td class="td1"><?php echo( ucfirst( $row['prenom_membre'])); ?></td>
				<td class="td1"><?php echo( $row['indicatif_membre']); ?></td>
				<td class="td1"><?php echo( $row['tel_fixe_perso']); ?></td>
				<td class="td1"><?php echo( $row['tel_portable_perso']); ?></td>
				<td class="td1"><?php echo( $row['mail_perso']); ?></td>
				<td class="td1"><?php echo( $row['tel_fixe_pro']); ?></td>
				<td class="td1"><?php echo( $row['tel_portable_pro']); ?></td>
				<td class="td1"><?php echo( $row['mail_pro']); ?></td>
			</tr>
<?php
		}
	}
} ?>
		</table>
	</div>
</body>
</html>
