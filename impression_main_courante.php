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
		<title>Impression des Mains Courantes</title>
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
		    window.open( "impression_main_courante.php", "impression_main_courante", options ) ;
		    }
		</script>
	</head>
	<body>
<?php 

$sql = "SELECT date_heure, recu_de, emis_vers, degre_urgence, mode_transmission, message FROM main_courante ORDER BY `date_heure` DESC";
if ($res = $bdd->query($sql)) {

	/* Récupère le nombre de lignes qui correspond à la requête SELECT */
	if ($res->fetchColumn() > 0) {

	/* Effectue la vraie requête SELECT et travaille sur le résultat */
	$sql = "SELECT date_heure, recu_de, emis_vers, degre_urgence, mode_transmission, message FROM main_courante ORDER BY `date_heure` DESC";
	foreach ($bdd->query($sql) as $row) {

		switch( $row['degre_urgence']) {
		case 'Urgent':
			$text_color = "blue";
			break;

		case 'Immediat':
			$text_color = "tomato";
			break;

		case 'Flash':
			$text_color = "red";
			break;

		case 'Sauvetage Vie Humaine':
			$text_color = "darksalmon";
			break;

		case 'Priorité Absolue':
			$text_color = "orangered";
			break;

		case 'Routine':
		default:
			$text_color = "black";
		}

		//FIXME: Generate standard HTML output.
?>
		<span style ="color: '.$text_color.';"><b><u><?php echo( $row['degre_urgence']); ?></u></b></span><br />
		<br />
		<b><?php echo( $row['date_heure']); ?></b><br />
		<br />
		Reçu de : <b><?php echo( strtoupper( $row['recu_de'])); ?></b> | Emis vers : <b><?php echo( strtoupper( $row['emis_vers'])); ?></b><br />
		<br />
		Mode de transmission : <b><?php echo( $row['mode_transmission']); ?></b><br /><br />
		<span style="font-family: Courier; font-type: monospace;"><?php echo( $row['message']); ?></span><br />
		<br />
		*******************************************<br />
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
