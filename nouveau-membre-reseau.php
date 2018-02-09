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

if (isset($_POST['valider_nv'])) {
	
	$indicatif = ($_POST['indicatif_nv']);
	$alias_tactique = ($_POST['alias_tactique_nv']);
	$operateur = ($_POST['operateur_nv']);
	$etat = ($_POST['etat_nv']);
	$commentaire = ($_POST['commentaire_nv']);

	nouveauMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire);
}
if (isset($_POST['valider'])) {
	$indicatif = ($_POST['membre']);
	$alias_tactique = ($_POST['alias_tactique']);
	$etat = ($_POST['etat']);
	$commentaire = ($_POST['commentaire']);

	$req_ope = $bdd->query('SELECT prenom_membre FROM membres WHERE indicatif_membre = "'.$indicatif.'"');

	while ($donnees_ope = $req_ope->fetch())
	{

	$operateur = $donnees_ope['prenom_membre'];
	
		$req_ope->closeCursor();
	}
	nouveauMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire);

}

 ?>

<html>
	<head>
		<title>Ajouter un nouveau membre réseau</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="assets/style.css">
	</head>
	<body>
		<form method="POST">
			<table class="formfield">
				<tr>
					<td colspan="2" class="titre">Ajouter un nouveau membre réseau depuis un membre déjà présent</td>
				</tr>
				<form method="POST">
				<tr>
					<td>Sélection du membre :</td>
					<td>
	      					<select name="membre">
<?php 

$sql = "SELECT id, indicatif_membre, nom_membre, prenom_membre FROM membres";
if ($res = $bdd->query($sql)) {

	/* Récupère le nombre de lignes qui correspond à la requête SELECT */
	if ($res->fetchColumn() > 0) {

		/* Effectue la vraie requête SELECT et travaille sur le résultat */
		$sql = "SELECT id, indicatif_membre, nom_membre, prenom_membre FROM membres";
		foreach ($bdd->query($sql) as $row) {
?>
						<option value="<?php echo( $row['indicatif_membre']); ?>"><?php echo( strtoupper($row['indicatif_membre']).', '.ucfirst($row['prenom_membre']).' '.strtoupper($row['nom_membre'])); ?></option>
';
<?php
		}
	}
} ?>
						</select>
					</td>
				</tr>
	
				<tr>
					<td>Alias tactique :</td>
					<td>
						<input type="text" name="alias_tactique" id="alias_tactique" placeholder ="Alias tactique">
					</td>
				</tr>
	
				<tr>
					<td>Etat :</td>
					<td>
						<select name="etat">
							<option value="actif"  style="background-color: green;">Actif</option>
							<option value="inactif" style="background-color: orangered;">Inactif</option>
							<option value="repos" style="background-color: dodgerblue;">Repos</option>
							<option value="indisponible" style="background-color: red;">Indisponible</option>
						</select>
					</td>
				</tr>
	
				<tr>
					<td>Commentaire :</td>
					<td>
						<input type="text" name="commentaire" id="commentaire" placeholder="Commentaire">
					</td>
				</tr>
		
				<tr>
					<td class="td_submit" colspan="2">
						<input type="submit" id="valider" name="valider" value="Valider"><br />
						<br />
					</td>
				</tr>
	
	
				<tr>
					<td colspan="2" class="titre">Ajouter un nouveau membre réseau non présent dans les membres</td>
				</tr>
				<form method="POST">
					<tr>
						<td>Indicatif :</td>
						<td>
							<input type="text" name="indicatif_nv" id="indicatif_nv" placeholder="Indicatif">
						</td>
					</tr>
				
					<tr>
						<td>Alias tactique :</td>
						<td>
							<input type="text" name="alias_tactique_nv" id="alias_tactique_nv" placeholder ="Alias tactique">
						</td>
					</tr>
			
					<tr>
						<td>Opérateur :</td>
						<td>
							<input type="text" name="operateur_nv" id="operateur_nv" placeholder="Opérateur">
						</td>
					</tr>
			
					<tr>
						<td>Etat :</td>
						<td>
							<select name="etat_nv">
								<option value="actif"  style="background-color: green;">Actif</option>
								<option value="inactif" style="background-color: orangered;">Inactif</option>
								<option value="repos" style="background-color: dodgerblue;">Repos</option>
								<option value="indisponible" style="background-color: red;">Indisponible</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Commentaire :</td>
						<td>
							<input type="text" name="commentaire_nv" id="commentaire_nv" placeholder="Commentaire">
						</td>
					</tr>

					<tr>
						<td class="td_submit" colspan="2">
							<input type="submit" id="valider_nv" name="valider_nv" value="Valider">
						</td>
					</tr>
				</form>
			</table>
		</form>
	</body>
</html>
