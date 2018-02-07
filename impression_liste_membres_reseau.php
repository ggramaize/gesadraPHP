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
		<title>Impression de la liste des membres réseau</title>
		<meta charset="UTF-8" />

		<style type="text/css">
		.variable{
				font-family: Courier;
				font-type: monospace;
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
<?php

$sql = "SELECT id, indicatif, alias_tactique, operateur, etat, commentaire FROM membres_reseau";
if ($res = $bdd->query($sql)) {

	/* Récupère le nombre de lignes qui correspond à la requête SELECT */
	if ($res->fetchColumn() > 0) {

		/* Effectue la vraie requête SELECT et travaille sur le résultat */
		$sql = "SELECT id, indicatif, alias_tactique, operateur, etat, commentaire FROM membres_reseau";
		foreach ($bdd->query($sql) as $row) {
		?>
		<b>Indicatif : </b><span class="variable"><?php echo( strtoupper($row['indicatif'])); ?></span><br />
		<b>Alias Tactique : </b><span class="variable"><?php echo( $row['alias_tactique']); ?></span><br />
		<b>Operateur : </b><span class="variable"><?php echo( $row['operateur']); ?></span><br />
		<b>Etat : </b><span class="variable"><?php echo( $row['etat']); ?></span><br />
		<b>Commentaire : </b><span class="variable"><?php echo( $row['commentaire']); ?></span><br />
		<br />
		******************************<br />
		<br />
<?php
		}
	}
} ?>

		<script type="text/javascript">
			window.print() ;
		</script>
	</body>
</html>
