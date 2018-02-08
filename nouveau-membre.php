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

$couleur_nom = "white";
$couleur_prenom = "white";
$couleur_indicatif = "white";
$couleur_tel_fixe_perso = "white";
$couleur_tel_port_perso = "white";
$couleur_adresse_mail_perso = "white";
$couleur_tel_fixe_pro = "white";
$couleur_tel_port_pro = "white";
$couleur_adresse_mail_pro = "white";

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
		$couleur_nom = "bisque";
	}else{
		$nom = $_POST['nom'];
	}

	if (empty($_POST['prenom'])) {
		$placeholder_prenom = "Merci de remplir ce champs";
		$couleur_prenom = "bisque";
	}else{
		$prenom = $_POST['prenom'];
	}

	if (empty($_POST['indicatif'])) {
		$placeholder_indicatif = "Merci de remplir ce champs";
		$couleur_indicatif = "bisque";
	}else{
		$indicatif = $_POST['indicatif'];
	}

	if (empty($_POST['fixe_perso'])) {
		$placeholder_tel_fixe_perso = "Merci de remplir ce champs";
		$couleur_tel_fixe_perso = "bisque";
	}else{
		$tel_fixe_perso = $_POST['fixe_perso'];
	}

	if (empty($_POST['port_perso'])) {
		$placeholder_tel_port_perso = "Merci de remplir ce champs";
		$couleur_tel_port_perso = "bisque";
	}else{
		$tel_port_perso = $_POST['port_perso'];
	}

	if (empty($_POST['mail_perso'])) {
		$placeholder_adresse_mail_perso = "Merci de remplir ce champs";
		$couleur_adresse_mail_perso = "bisque";
	}else{
		$adresse_mail_perso = $_POST['mail_perso'];
	}

	if (empty($_POST['fixe_pro'])) {
		$placeholder_tel_fixe_pro = "Merci de remplir ce champs";
		$couleur_tel_fixe_pro = "bisque";
	}else{
		$tel_fixe_pro = $_POST['fixe_pro'];
	}

	if (empty($_POST['port_pro'])) {
		$placeholder_tel_port_pro = "Merci de remplir ce champs";
		$couleur_tel_port_pro = "bisque";
	}else{
		$tel_port_pro = $_POST['port_pro'];
	}

	if (empty($_POST['mail_pro'])) {
		$placeholder_adresse_mail_pro = "Merci de remplir ce champs";
		$couleur_adresse_mail_pro = "bisque";
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
	</head>
	<body>
		<form method="POST">
			<table width="100%">
				<tr width="100%">
					<td colspan="2" style="background-color: orange; color: blue;">
						<div align="center">
							<span style="background: orange; font-size : 18px; color: blue;"><b>Ajouter un nouveau membre</b></span>
							<br />
						</div>
					</td>
				</tr>
				<tr width="100%">
					<td width="30%">Nom :</td>
					<td width="70%">
						<input type="text" <?php echo 'style="width : 200px; background-color :  '.$couleur_nom.' ;"';?> name="nom" id="nom" value='<?php echo $nom; ?>' placeholder='<?php echo $placeholder_nom; ?>'>
					</td>
				</tr>
				<tr width="100%">
					<td width="30%">Prénom :</td>
					<td width="70%">
						<input type="text" style='width : 200px; background-color : <?php echo $couleur_prenom; ?>;' name="prenom" id="prenom" value='<?php echo $prenom; ?>' placeholder ='<?php echo $placeholder_prenom; ?>'>
					</td>
				</tr>
				<tr width="100%">
					<td width="30%">Indicatif :</td>
					<td width="70%">
						<input type="text" style='width : 200px; background-color : <?php echo $couleur_indicatif; ?>;' name="indicatif" id="indicatif" value='<?php echo $indicatif; ?>' placeholder='<?php echo $placeholder_indicatif; ?>'>
					</td>
				</tr>

				<tr width="100%">
					<td width="30%">Téléphone fixe personnel :</td>
					<td width="70%">
						<input type="text" style='width : 200px; background-color : <?php echo $couleur_tel_fixe_perso; ?>;' name="fixe_perso" id="fixe_perso" value='<?php echo $tel_fixe_perso; ?>' placeholder='<?php echo $placeholder_tel_fixe_perso; ?>'>
					</td>
				</tr>
				<tr width="100%">
					<td width="30%">Téléphone portable personnel :</td>
					<td width="70%">
						<input type="text" style='width : 200px; background-color : <?php echo $couleur_tel_port_perso; ?>;' name="port_perso" id="port_perso" value='<?php echo $tel_port_perso; ?>' placeholder='<?php echo $placeholder_tel_port_perso; ?>'>
					</td>
				</tr>
				<tr width="100%">
					<td width="30%">Adresse e-mail personnelle :</td>
					<td width="70%">
						<input type="text" style='width : 200px; background-color : <?php echo $couleur_adresse_mail_perso; ?>;' name="mail_perso" id="mail_perso" value='<?php echo $adresse_mail_perso; ?>' placeholder='<?php echo $placeholder_adresse_mail_perso; ?>'>
					</td>
				</tr>

				<tr width="100%">
					<td width="30%">Téléphone fixe professionel :</td>
					<td width="70%">
						<input type="text" style='width : 200px; background-color : <?php echo $couleur_tel_fixe_pro; ?>;' name="fixe_pro" id="fixe_pro" value='<?php echo $tel_fixe_pro; ?>' placeholder='<?php echo $placeholder_tel_fixe_pro; ?>'>
					</td>
				</tr>

				<tr width="100%">
					<td width="30%">Téléphone portable professionel :</td>
					<td width="70%">
						<input type="text" style='width : 200px; background-color : <?php echo $couleur_tel_port_pro; ?>;' name="port_pro" id="port_pro" value='<?php echo $tel_port_pro; ?>' placeholder='<?php echo $placeholder_tel_port_pro; ?>'>
					</td>
				</tr>

				<tr width="100%">
					<td width="30%">Adresse e-mail professionelle :</td>
					<td width="70%">
						<input type="text" style='width : 200px; background-color : <?php echo $couleur_adresse_mail_pro; ?>;' name="mail_pro" id="mail_pro" value='<?php echo $adresse_mail_pro; ?>' placeholder='<?php echo $placeholder_adresse_mail_pro; ?>'>
					</td>
				</tr>

				<tr width="100%">
					<td colspan="2">
						<div align="center">
							<input type="submit" style="margin-top : 10px;" id="valider" name="valider" value="Valider">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
