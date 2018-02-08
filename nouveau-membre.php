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

$nom = "";
$prenom = "";
$indicatif = "";
$tel_fixe_perso = "";
$tel_port_perso = "";
$adresse_mail_perso = "";
$tel_fixe_pro = "";
$tel_port_pro = "";
$adresse_mail_pro = "";

$couleur_nom = "";
$couleur_prenom = "";
$couleur_indicatif = "";
$couleur_tel_fixe_perso = "";
$couleur_tel_port_perso = "";
$couleur_adresse_mail_perso = "";
$couleur_tel_fixe_pro = "";
$couleur_tel_port_pro = "";
$couleur_adresse_mail_pro = "";

$placeholder_nom = "Nom";
$placeholder_prenom = "Prénom";
$placeholder_indicatif = "Indicatif";
$placeholder_tel_fixe_perso = "Téléphone fixe personnel";
$placeholder_tel_port_perso = "Téléphone portable personnel";
$placeholder_adresse_mail_perso = "Adresse mail personnelle";
$placeholder_tel_fixe_pro = "Téléphone fixe professionel";
$placeholder_tel_port_pro = "Téléphone portable professionel";
$placeholder_adresse_mail_pro = "Adresse mail professionelle";

if (isset($_POST['valider'])) {
	
	if (empty($_POST['nom'])) {
		$placeholder_nom = "Merci de remplir ce champs";
		$couleur_nom = 'class="fielderror"';
	}else{
		$nom = $_POST['nom'];
	}

	if (empty($_POST['prenom'])) {
		$placeholder_prenom = "Merci de remplir ce champs";
		$couleur_prenom = 'class="fielderror"';
	}else{
		$prenom = $_POST['prenom'];
	}

	if (empty($_POST['indicatif'])) {
		$placeholder_indicatif = "Merci de remplir ce champs";
		$couleur_indicatif = 'class="fielderror"';
	}else{
		$indicatif = $_POST['indicatif'];
	}

	if (empty($_POST['fixe_perso'])) {
		$placeholder_tel_fixe_perso = "Merci de remplir ce champs";
		$couleur_tel_fixe_perso = 'class="fielderror"';
	}else{
		$tel_fixe_perso = $_POST['fixe_perso'];
	}

	if (empty($_POST['port_perso'])) {
		$placeholder_tel_port_perso = "Merci de remplir ce champs";
		$couleur_tel_port_perso = 'class="fielderror"';
	}else{
		$tel_port_perso = $_POST['port_perso'];
	}

	if (empty($_POST['mail_perso'])) {
		$placeholder_adresse_mail_perso = "Merci de remplir ce champs";
		$couleur_adresse_mail_perso = 'class="fielderror"';
	}else{
		$adresse_mail_perso = $_POST['mail_perso'];
	}

	if (empty($_POST['fixe_pro'])) {
		$placeholder_tel_fixe_pro = "Merci de remplir ce champs";
		$couleur_tel_fixe_pro = 'class="fielderror"';
	}else{
		$tel_fixe_pro = $_POST['fixe_pro'];
	}

	if (empty($_POST['port_pro'])) {
		$placeholder_tel_port_pro = "Merci de remplir ce champs";
		$couleur_tel_port_pro = 'class="fielderror"';
	}else{
		$tel_port_pro = $_POST['port_pro'];
	}

	if (empty($_POST['mail_pro'])) {
		$placeholder_adresse_mail_pro = "Merci de remplir ce champs";
		$couleur_adresse_mail_pro = 'class="fielderror"';
	}else{
		$adresse_mail_pro = $_POST['mail_pro'];
	}



	if (
		!empty($_POST['nom']) &&
		!empty($_POST['prenom']) &&
		!empty($_POST['indicatif']) &&
		!empty($_POST['fixe_perso']) &&
		!empty($_POST['port_perso']) &&
		!empty($_POST['mail_perso']) &&
		!empty($_POST['fixe_pro']) &&
		!empty($_POST['port_pro']) &&
		!empty($_POST['mail_pro'])
	) {

		$nom_membre = ($_POST['nom']);
		$prenom_membre = ($_POST['prenom']);
		$indicatif_membre = ($_POST['indicatif']);
		$tel_fixe_perso = ($_POST['fixe_perso']);
		$tel_portable_perso = ($_POST['port_perso']);
		$mail_perso = ($_POST['mail_perso']);
		$tel_fixe_pro = ($_POST['fixe_pro']);
		$tel_portable_pro = ($_POST['port_pro']);
		$mail_pro = ($_POST['mail_pro']);

		nouveauMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro);

		$nom = "";
		$prenom = "";
		$indicatif = "";
		$tel_fixe_perso = "";
		$tel_port_perso = "";
		$adresse_mail_perso = "";
		$tel_fixe_pro = "";
		$tel_port_pro = "";
		$adresse_mail_pro = "";
	}
	
}

 ?>

<html>
	<head>
		<title>Ajouter un nouveau membre</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="assets/style.css">
	</head>
	<body>
		<form method="POST">
			<table class="formfield">
				<tr>
					<td colspan="2" class="titre">Ajouter un nouveau membre</td>
				</tr>
				<tr>
					<td>Nom :</td>
					<td>
						<input type="text" <?php echo $couleur_nom; ?> name="nom" id="nom" value="<?php echo $nom; ?>" placeholder="<?php echo $placeholder_nom; ?>">
					</td>
				</tr>
				<tr>
					<td>Prénom :</td>
					<td>
						<input type="text" <?php echo $couleur_prenom; ?> name="prenom" id="prenom" value="<?php echo $prenom; ?>" placeholder="<?php echo $placeholder_prenom; ?>">
					</td>
				</tr>
				<tr>
					<td>Indicatif :</td>
					<td>
						<input type="text" <?php echo $couleur_indicatif; ?> name="indicatif" id="indicatif" value="<?php echo $indicatif; ?>" placeholder="<?php echo $placeholder_indicatif; ?>">
					</td>
				</tr>

				<tr>
					<td>Téléphone fixe personnel :</td>
					<td>
						<input type="text" <?php echo $couleur_tel_fixe_perso; ?> name="fixe_perso" id="fixe_perso" value="<?php echo $tel_fixe_perso; ?>" placeholder="<?php echo $placeholder_tel_fixe_perso; ?>">
					</td>
				</tr>
				<tr>
					<td>Téléphone portable personnel :</td>
					<td>
						<input type="text" <?php echo $couleur_tel_port_perso; ?> name="port_perso" id="port_perso" value="<?php echo $tel_port_perso; ?>" placeholder="<?php echo $placeholder_tel_port_perso; ?>">
					</td>
				</tr>
				<tr>
					<td>Adresse e-mail personnelle :</td>
					<td>
						<input type="text" <?php echo $couleur_adresse_mail_perso; ?> name="mail_perso" id="mail_perso" value="<?php echo $adresse_mail_perso; ?>" placeholder="<?php echo $placeholder_adresse_mail_perso; ?>">
					</td>
				</tr>

				<tr>
					<td>Téléphone fixe professionel :</td>
					<td>
						<input type="text" <?php echo $couleur_tel_fixe_pro; ?> name="fixe_pro" id="fixe_pro" value="<?php echo $tel_fixe_pro; ?>" placeholder="<?php echo $placeholder_tel_fixe_pro; ?>">
					</td>
				</tr>

				<tr>
					<td>Téléphone portable professionel :</td>
					<td>
						<input type="text" <?php echo $couleur_tel_port_pro; ?> name="port_pro" id="port_pro" value="<?php echo $tel_port_pro; ?>" placeholder="<?php echo $placeholder_tel_port_pro; ?>">
					</td>
				</tr>

				<tr>
					<td>Adresse e-mail professionelle :</td>
					<td>
						<input type="text" <?php echo $couleur_adresse_mail_pro; ?> name="mail_pro" id="mail_pro" value="<?php echo $adresse_mail_pro; ?>" placeholder="<?php echo $placeholder_adresse_mail_pro; ?>">
					</td>
				</tr>

				<tr>
					<td colspan="2" class="td_submit">
							<input type="submit" id="valider" name="valider" value="Valider">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
