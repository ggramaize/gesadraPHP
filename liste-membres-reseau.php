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
		<link rel="stylesheet" type="text/css" href="assets/style.css">
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
		<tr width="100%">
			<td style="background-color: orange; color:blue;" width="100%">
				<div style="margin-left: 250px;"><span style="font-size : 18px;"><b>Liste des membres réseau</b></span></br></div>
			</td>
		</tr>
	</table>

	<div align="center">
		<table class="table1" width="130%">
			<thead>
				<tr>
					<th>ID</th>
					<th>Indicatif</th>
					<th>Alias tactique</th>
					<th>Opérateur</th>
					<th>Etat</th>
					<th>Commentaire</th>
				</tr>
			</thead>
			<tr>
				<a href="impression_liste_membres_reseau.php" onclick="edition();return false;">Imprimer la liste</a>
			</tr>
<?php 

$sql = "SELECT id, indicatif, alias_tactique, operateur, etat, commentaire FROM membres_reseau";
if ($res = $bdd->query($sql)) {

	/* Récupère le nombre de lignes qui correspond à la requête SELECT */
	if ($res->fetchColumn() > 0) {

		/* Effectue la vraie requête SELECT et travaille sur le résultat */
		$sql = "SELECT id, indicatif, alias_tactique, operateur, etat, commentaire FROM membres_reseau";
		foreach ($bdd->query($sql) as $row) {

			switch( $row['etat'] ) {
			case 'actif':
				$couleur = 'green';
				break;

			case 'inactif':
				$couleur = 'orangered';
				break;

			case 'repos':
				$couleur = 'dodgerblue';
				break;

			case 'indisponible':
				$couleur = 'red';
				break;
			default:
				$couleur = 'gray44';
			}
		?>
			<tr>
				<td class="td1"><?php echo( $row['id']); ?></td>
				<td class="td1"><?php echo( strtoupper( $row['indicatif'])); ?></td>
				<td class="td1"><?php echo( $row['alias_tactique']); ?></td>
				<td class="td1"><?php echo( $row['operateur']); ?></td>
				<td class="td1" style ="background-color : '<?php echo( $couleur); ?>';"><?php echo( $row['etat']); ?></td>
				<td class="td1"><?php echo( $row['commentaire']); ?></td>
			</tr>
<?php
		}
	}
} ?>
		</table>
	</div> 
</body>
</html>
