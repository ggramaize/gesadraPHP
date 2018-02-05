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


if (isset($_POST['1'])) {
	$d = 1;
	$nom_membre = ($_POST['nom_1']);
	$prenom_membre = ($_POST['prenom_1']);
	$indicatif_membre = ($_POST['indicatif_1']);
	$tel_fixe_perso = ($_POST['fixe_perso_1']);
	$tel_portable_perso = ($_POST['port_perso_1']);
	$mail_perso = ($_POST['mail_perso_1']);
	$tel_fixe_pro = ($_POST['fixe_pro_1']);
	$tel_portable_pro = ($_POST['port_pro_1']);
	$mail_pro = ($_POST['mail_pro_1']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['2'])) {
	$d = 2;
	$nom_membre = ($_POST['nom_2']);
	$prenom_membre = ($_POST['prenom_2']);
	$indicatif_membre = ($_POST['indicatif_2']);
	$tel_fixe_perso = ($_POST['fixe_perso_2']);
	$tel_portable_perso = ($_POST['port_perso_2']);
	$mail_perso = ($_POST['mail_perso_2']);
	$tel_fixe_pro = ($_POST['fixe_pro_2']);
	$tel_portable_pro = ($_POST['port_pro_2']);
	$mail_pro = ($_POST['mail_pro_2']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['3'])) {
	$d = 3;
	$nom_membre = ($_POST['nom_3']);
	$prenom_membre = ($_POST['prenom_3']);
	$indicatif_membre = ($_POST['indicatif_3']);
	$tel_fixe_perso = ($_POST['fixe_perso_3']);
	$tel_portable_perso = ($_POST['port_perso_3']);
	$mail_perso = ($_POST['mail_perso_3']);
	$tel_fixe_pro = ($_POST['fixe_pro_3']);
	$tel_portable_pro = ($_POST['port_pro_3']);
	$mail_pro = ($_POST['mail_pro_3']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['4'])) {
	$d = 4;
	$nom_membre = ($_POST['nom_4']);
	$prenom_membre = ($_POST['prenom_4']);
	$indicatif_membre = ($_POST['indicatif_4']);
	$tel_fixe_perso = ($_POST['fixe_perso_4']);
	$tel_portable_perso = ($_POST['port_perso_4']);
	$mail_perso = ($_POST['mail_perso_4']);
	$tel_fixe_pro = ($_POST['fixe_pro_4']);
	$tel_portable_pro = ($_POST['port_pro_4']);
	$mail_pro = ($_POST['mail_pro_4']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['5'])) {
	$d = 5;
	$nom_membre = ($_POST['nom_5']);
	$prenom_membre = ($_POST['prenom_5']);
	$indicatif_membre = ($_POST['indicatif_5']);
	$tel_fixe_perso = ($_POST['fixe_perso_5']);
	$tel_portable_perso = ($_POST['port_perso_5']);
	$mail_perso = ($_POST['mail_perso_5']);
	$tel_fixe_pro = ($_POST['fixe_pro_5']);
	$tel_portable_pro = ($_POST['port_pro_5']);
	$mail_pro = ($_POST['mail_pro_5']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['6'])) {
	$d = 6;
	$nom_membre = ($_POST['nom_6']);
	$prenom_membre = ($_POST['prenom_6']);
	$indicatif_membre = ($_POST['indicatif_6']);
	$tel_fixe_perso = ($_POST['fixe_perso_6']);
	$tel_portable_perso = ($_POST['port_perso_6']);
	$mail_perso = ($_POST['mail_perso_6']);
	$tel_fixe_pro = ($_POST['fixe_pro_6']);
	$tel_portable_pro = ($_POST['port_pro_6']);
	$mail_pro = ($_POST['mail_pro_6']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['7'])) {
	$d = 7;
	$nom_membre = ($_POST['nom_7']);
	$prenom_membre = ($_POST['prenom_7']);
	$indicatif_membre = ($_POST['indicatif_7']);
	$tel_fixe_perso = ($_POST['fixe_perso_7']);
	$tel_portable_perso = ($_POST['port_perso_7']);
	$mail_perso = ($_POST['mail_perso_7']);
	$tel_fixe_pro = ($_POST['fixe_pro_7']);
	$tel_portable_pro = ($_POST['port_pro_7']);
	$mail_pro = ($_POST['mail_pro_7']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['8'])) {
	$d = 8;
	$nom_membre = ($_POST['nom_8']);
	$prenom_membre = ($_POST['prenom_8']);
	$indicatif_membre = ($_POST['indicatif_8']);
	$tel_fixe_perso = ($_POST['fixe_perso_8']);
	$tel_portable_perso = ($_POST['port_perso_8']);
	$mail_perso = ($_POST['mail_perso_8']);
	$tel_fixe_pro = ($_POST['fixe_pro_8']);
	$tel_portable_pro = ($_POST['port_pro_8']);
	$mail_pro = ($_POST['mail_pro_8']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['9'])) {
	$d = 9;
	$nom_membre = ($_POST['nom_9']);
	$prenom_membre = ($_POST['prenom_9']);
	$indicatif_membre = ($_POST['indicatif_9']);
	$tel_fixe_perso = ($_POST['fixe_perso_9']);
	$tel_portable_perso = ($_POST['port_perso_9']);
	$mail_perso = ($_POST['mail_perso_9']);
	$tel_fixe_pro = ($_POST['fixe_pro_9']);
	$tel_portable_pro = ($_POST['port_pro_9']);
	$mail_pro = ($_POST['mail_pro_9']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['10'])) {
	$d = 10;
	$nom_membre = ($_POST['nom_10']);
	$prenom_membre = ($_POST['prenom_10']);
	$indicatif_membre = ($_POST['indicatif_10']);
	$tel_fixe_perso = ($_POST['fixe_perso_10']);
	$tel_portable_perso = ($_POST['port_perso_10']);
	$mail_perso = ($_POST['mail_perso_10']);
	$tel_fixe_pro = ($_POST['fixe_pro_10']);
	$tel_portable_pro = ($_POST['port_pro_10']);
	$mail_pro = ($_POST['mail_pro_10']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['11'])) {
	$d = 11;
	$nom_membre = ($_POST['nom_11']);
	$prenom_membre = ($_POST['prenom_11']);
	$indicatif_membre = ($_POST['indicatif_11']);
	$tel_fixe_perso = ($_POST['fixe_perso_11']);
	$tel_portable_perso = ($_POST['port_perso_11']);
	$mail_perso = ($_POST['mail_perso_11']);
	$tel_fixe_pro = ($_POST['fixe_pro_11']);
	$tel_portable_pro = ($_POST['port_pro_11']);
	$mail_pro = ($_POST['mail_pro_11']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['12'])) {
	$d = 12;
	$nom_membre = ($_POST['nom_12']);
	$prenom_membre = ($_POST['prenom_12']);
	$indicatif_membre = ($_POST['indicatif_12']);
	$tel_fixe_perso = ($_POST['fixe_perso_12']);
	$tel_portable_perso = ($_POST['port_perso_12']);
	$mail_perso = ($_POST['mail_perso_12']);
	$tel_fixe_pro = ($_POST['fixe_pro_12']);
	$tel_portable_pro = ($_POST['port_pro_12']);
	$mail_pro = ($_POST['mail_pro_12']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['13'])) {
	$d = 13;
	$nom_membre = ($_POST['nom_13']);
	$prenom_membre = ($_POST['prenom_13']);
	$indicatif_membre = ($_POST['indicatif_13']);
	$tel_fixe_perso = ($_POST['fixe_perso_13']);
	$tel_portable_perso = ($_POST['port_perso_13']);
	$mail_perso = ($_POST['mail_perso_13']);
	$tel_fixe_pro = ($_POST['fixe_pro_13']);
	$tel_portable_pro = ($_POST['port_pro_13']);
	$mail_pro = ($_POST['mail_pro_13']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['14'])) {
	$d = 14;
	$nom_membre = ($_POST['nom_14']);
	$prenom_membre = ($_POST['prenom_14']);
	$indicatif_membre = ($_POST['indicatif_14']);
	$tel_fixe_perso = ($_POST['fixe_perso_14']);
	$tel_portable_perso = ($_POST['port_perso_14']);
	$mail_perso = ($_POST['mail_perso_14']);
	$tel_fixe_pro = ($_POST['fixe_pro_14']);
	$tel_portable_pro = ($_POST['port_pro_14']);
	$mail_pro = ($_POST['mail_pro_14']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['15'])) {
	$d = 15;
	$nom_membre = ($_POST['nom_15']);
	$prenom_membre = ($_POST['prenom_15']);
	$indicatif_membre = ($_POST['indicatif_15']);
	$tel_fixe_perso = ($_POST['fixe_perso_15']);
	$tel_portable_perso = ($_POST['port_perso_15']);
	$mail_perso = ($_POST['mail_perso_15']);
	$tel_fixe_pro = ($_POST['fixe_pro_15']);
	$tel_portable_pro = ($_POST['port_pro_15']);
	$mail_pro = ($_POST['mail_pro_15']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['16'])) {
	$d = 16;
	$nom_membre = ($_POST['nom_16']);
	$prenom_membre = ($_POST['prenom_16']);
	$indicatif_membre = ($_POST['indicatif_16']);
	$tel_fixe_perso = ($_POST['fixe_perso_16']);
	$tel_portable_perso = ($_POST['port_perso_16']);
	$mail_perso = ($_POST['mail_perso_16']);
	$tel_fixe_pro = ($_POST['fixe_pro_16']);
	$tel_portable_pro = ($_POST['port_pro_16']);
	$mail_pro = ($_POST['mail_pro_16']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['17'])) {
	$d = 17;
	$nom_membre = ($_POST['nom_17']);
	$prenom_membre = ($_POST['prenom_17']);
	$indicatif_membre = ($_POST['indicatif_17']);
	$tel_fixe_perso = ($_POST['fixe_perso_17']);
	$tel_portable_perso = ($_POST['port_perso_17']);
	$mail_perso = ($_POST['mail_perso_17']);
	$tel_fixe_pro = ($_POST['fixe_pro_17']);
	$tel_portable_pro = ($_POST['port_pro_17']);
	$mail_pro = ($_POST['mail_pro_17']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['18'])) {
	$d = 18;
	$nom_membre = ($_POST['nom_18']);
	$prenom_membre = ($_POST['prenom_18']);
	$indicatif_membre = ($_POST['indicatif_18']);
	$tel_fixe_perso = ($_POST['fixe_perso_18']);
	$tel_portable_perso = ($_POST['port_perso_18']);
	$mail_perso = ($_POST['mail_perso_18']);
	$tel_fixe_pro = ($_POST['fixe_pro_18']);
	$tel_portable_pro = ($_POST['port_pro_18']);
	$mail_pro = ($_POST['mail_pro_18']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['19'])) {
	$d = 19;
	$nom_membre = ($_POST['nom_19']);
	$prenom_membre = ($_POST['prenom_19']);
	$indicatif_membre = ($_POST['indicatif_19']);
	$tel_fixe_perso = ($_POST['fixe_perso_19']);
	$tel_portable_perso = ($_POST['port_perso_19']);
	$mail_perso = ($_POST['mail_perso_19']);
	$tel_fixe_pro = ($_POST['fixe_pro_19']);
	$tel_portable_pro = ($_POST['port_pro_19']);
	$mail_pro = ($_POST['mail_pro_19']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['20'])) {
	$d = 20;
	$nom_membre = ($_POST['nom_20']);
	$prenom_membre = ($_POST['prenom_20']);
	$indicatif_membre = ($_POST['indicatif_20']);
	$tel_fixe_perso = ($_POST['fixe_perso_20']);
	$tel_portable_perso = ($_POST['port_perso_20']);
	$mail_perso = ($_POST['mail_perso_20']);
	$tel_fixe_pro = ($_POST['fixe_pro_20']);
	$tel_portable_pro = ($_POST['port_pro_20']);
	$mail_pro = ($_POST['mail_pro_20']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['21'])) {
	$d = 21;
	$nom_membre = ($_POST['nom_21']);
	$prenom_membre = ($_POST['prenom_21']);
	$indicatif_membre = ($_POST['indicatif_21']);
	$tel_fixe_perso = ($_POST['fixe_perso_21']);
	$tel_portable_perso = ($_POST['port_perso_21']);
	$mail_perso = ($_POST['mail_perso_21']);
	$tel_fixe_pro = ($_POST['fixe_pro_21']);
	$tel_portable_pro = ($_POST['port_pro_21']);
	$mail_pro = ($_POST['mail_pro_21']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['22'])) {
	$d = 22;
	$nom_membre = ($_POST['nom_22']);
	$prenom_membre = ($_POST['prenom_22']);
	$indicatif_membre = ($_POST['indicatif_22']);
	$tel_fixe_perso = ($_POST['fixe_perso_22']);
	$tel_portable_perso = ($_POST['port_perso_22']);
	$mail_perso = ($_POST['mail_perso_22']);
	$tel_fixe_pro = ($_POST['fixe_pro_22']);
	$tel_portable_pro = ($_POST['port_pro_22']);
	$mail_pro = ($_POST['mail_pro_22']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['23'])) {
	$d = 23;
	$nom_membre = ($_POST['nom_23']);
	$prenom_membre = ($_POST['prenom_23']);
	$indicatif_membre = ($_POST['indicatif_23']);
	$tel_fixe_perso = ($_POST['fixe_perso_23']);
	$tel_portable_perso = ($_POST['port_perso_23']);
	$mail_perso = ($_POST['mail_perso_23']);
	$tel_fixe_pro = ($_POST['fixe_pro_23']);
	$tel_portable_pro = ($_POST['port_pro_23']);
	$mail_pro = ($_POST['mail_pro_23']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['24'])) {
	$d = 24;
	$nom_membre = ($_POST['nom_24']);
	$prenom_membre = ($_POST['prenom_24']);
	$indicatif_membre = ($_POST['indicatif_24']);
	$tel_fixe_perso = ($_POST['fixe_perso_24']);
	$tel_portable_perso = ($_POST['port_perso_24']);
	$mail_perso = ($_POST['mail_perso_24']);
	$tel_fixe_pro = ($_POST['fixe_pro_24']);
	$tel_portable_pro = ($_POST['port_pro_24']);
	$mail_pro = ($_POST['mail_pro_24']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['25'])) {
	$d = 25;
	$nom_membre = ($_POST['nom_25']);
	$prenom_membre = ($_POST['prenom_25']);
	$indicatif_membre = ($_POST['indicatif_25']);
	$tel_fixe_perso = ($_POST['fixe_perso_25']);
	$tel_portable_perso = ($_POST['port_perso_25']);
	$mail_perso = ($_POST['mail_perso_25']);
	$tel_fixe_pro = ($_POST['fixe_pro_25']);
	$tel_portable_pro = ($_POST['port_pro_25']);
	$mail_pro = ($_POST['mail_pro_25']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['26'])) {
	$d = 26;
	$nom_membre = ($_POST['nom_26']);
	$prenom_membre = ($_POST['prenom_26']);
	$indicatif_membre = ($_POST['indicatif_26']);
	$tel_fixe_perso = ($_POST['fixe_perso_26']);
	$tel_portable_perso = ($_POST['port_perso_26']);
	$mail_perso = ($_POST['mail_perso_26']);
	$tel_fixe_pro = ($_POST['fixe_pro_26']);
	$tel_portable_pro = ($_POST['port_pro_26']);
	$mail_pro = ($_POST['mail_pro_26']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['27'])) {
	$d = 27;
	$nom_membre = ($_POST['nom_27']);
	$prenom_membre = ($_POST['prenom_27']);
	$indicatif_membre = ($_POST['indicatif_27']);
	$tel_fixe_perso = ($_POST['fixe_perso_27']);
	$tel_portable_perso = ($_POST['port_perso_27']);
	$mail_perso = ($_POST['mail_perso_27']);
	$tel_fixe_pro = ($_POST['fixe_pro_27']);
	$tel_portable_pro = ($_POST['port_pro_27']);
	$mail_pro = ($_POST['mail_pro_27']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['28'])) {
	$d = 28;
	$nom_membre = ($_POST['nom_28']);
	$prenom_membre = ($_POST['prenom_28']);
	$indicatif_membre = ($_POST['indicatif_28']);
	$tel_fixe_perso = ($_POST['fixe_perso_28']);
	$tel_portable_perso = ($_POST['port_perso_28']);
	$mail_perso = ($_POST['mail_perso_28']);
	$tel_fixe_pro = ($_POST['fixe_pro_28']);
	$tel_portable_pro = ($_POST['port_pro_28']);
	$mail_pro = ($_POST['mail_pro_28']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['29'])) {
	$d = 29;
	$nom_membre = ($_POST['nom_29']);
	$prenom_membre = ($_POST['prenom_29']);
	$indicatif_membre = ($_POST['indicatif_29']);
	$tel_fixe_perso = ($_POST['fixe_perso_29']);
	$tel_portable_perso = ($_POST['port_perso_29']);
	$mail_perso = ($_POST['mail_perso_29']);
	$tel_fixe_pro = ($_POST['fixe_pro_29']);
	$tel_portable_pro = ($_POST['port_pro_29']);
	$mail_pro = ($_POST['mail_pro_29']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['30'])) {
	$d = 30;
	$nom_membre = ($_POST['nom_30']);
	$prenom_membre = ($_POST['prenom_30']);
	$indicatif_membre = ($_POST['indicatif_30']);
	$tel_fixe_perso = ($_POST['fixe_perso_30']);
	$tel_portable_perso = ($_POST['port_perso_30']);
	$mail_perso = ($_POST['mail_perso_30']);
	$tel_fixe_pro = ($_POST['fixe_pro_30']);
	$tel_portable_pro = ($_POST['port_pro_30']);
	$mail_pro = ($_POST['mail_pro_30']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['31'])) {
	$d = 31;
	$nom_membre = ($_POST['nom_31']);
	$prenom_membre = ($_POST['prenom_31']);
	$indicatif_membre = ($_POST['indicatif_31']);
	$tel_fixe_perso = ($_POST['fixe_perso_31']);
	$tel_portable_perso = ($_POST['port_perso_31']);
	$mail_perso = ($_POST['mail_perso_31']);
	$tel_fixe_pro = ($_POST['fixe_pro_31']);
	$tel_portable_pro = ($_POST['port_pro_31']);
	$mail_pro = ($_POST['mail_pro_31']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['32'])) {
	$d = 32;
	$nom_membre = ($_POST['nom_32']);
	$prenom_membre = ($_POST['prenom_32']);
	$indicatif_membre = ($_POST['indicatif_32']);
	$tel_fixe_perso = ($_POST['fixe_perso_32']);
	$tel_portable_perso = ($_POST['port_perso_32']);
	$mail_perso = ($_POST['mail_perso_32']);
	$tel_fixe_pro = ($_POST['fixe_pro_32']);
	$tel_portable_pro = ($_POST['port_pro_32']);
	$mail_pro = ($_POST['mail_pro_32']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['33'])) {
	$d = 33;
	$nom_membre = ($_POST['nom_33']);
	$prenom_membre = ($_POST['prenom_33']);
	$indicatif_membre = ($_POST['indicatif_33']);
	$tel_fixe_perso = ($_POST['fixe_perso_33']);
	$tel_portable_perso = ($_POST['port_perso_33']);
	$mail_perso = ($_POST['mail_perso_33']);
	$tel_fixe_pro = ($_POST['fixe_pro_33']);
	$tel_portable_pro = ($_POST['port_pro_33']);
	$mail_pro = ($_POST['mail_pro_33']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['34'])) {
	$d = 34;
	$nom_membre = ($_POST['nom_34']);
	$prenom_membre = ($_POST['prenom_34']);
	$indicatif_membre = ($_POST['indicatif_34']);
	$tel_fixe_perso = ($_POST['fixe_perso_34']);
	$tel_portable_perso = ($_POST['port_perso_34']);
	$mail_perso = ($_POST['mail_perso_34']);
	$tel_fixe_pro = ($_POST['fixe_pro_34']);
	$tel_portable_pro = ($_POST['port_pro_34']);
	$mail_pro = ($_POST['mail_pro_34']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['35'])) {
	$d = 35;
	$nom_membre = ($_POST['nom_35']);
	$prenom_membre = ($_POST['prenom_35']);
	$indicatif_membre = ($_POST['indicatif_35']);
	$tel_fixe_perso = ($_POST['fixe_perso_35']);
	$tel_portable_perso = ($_POST['port_perso_35']);
	$mail_perso = ($_POST['mail_perso_35']);
	$tel_fixe_pro = ($_POST['fixe_pro_35']);
	$tel_portable_pro = ($_POST['port_pro_35']);
	$mail_pro = ($_POST['mail_pro_35']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['36'])) {
	$d = 36;
	$nom_membre = ($_POST['nom_36']);
	$prenom_membre = ($_POST['prenom_36']);
	$indicatif_membre = ($_POST['indicatif_36']);
	$tel_fixe_perso = ($_POST['fixe_perso_36']);
	$tel_portable_perso = ($_POST['port_perso_36']);
	$mail_perso = ($_POST['mail_perso_36']);
	$tel_fixe_pro = ($_POST['fixe_pro_36']);
	$tel_portable_pro = ($_POST['port_pro_36']);
	$mail_pro = ($_POST['mail_pro_36']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['37'])) {
	$d = 37;
	$nom_membre = ($_POST['nom_37']);
	$prenom_membre = ($_POST['prenom_37']);
	$indicatif_membre = ($_POST['indicatif_37']);
	$tel_fixe_perso = ($_POST['fixe_perso_37']);
	$tel_portable_perso = ($_POST['port_perso_37']);
	$mail_perso = ($_POST['mail_perso_37']);
	$tel_fixe_pro = ($_POST['fixe_pro_37']);
	$tel_portable_pro = ($_POST['port_pro_37']);
	$mail_pro = ($_POST['mail_pro_37']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['38'])) {
	$d = 38;
	$nom_membre = ($_POST['nom_38']);
	$prenom_membre = ($_POST['prenom_38']);
	$indicatif_membre = ($_POST['indicatif_38']);
	$tel_fixe_perso = ($_POST['fixe_perso_38']);
	$tel_portable_perso = ($_POST['port_perso_38']);
	$mail_perso = ($_POST['mail_perso_38']);
	$tel_fixe_pro = ($_POST['fixe_pro_38']);
	$tel_portable_pro = ($_POST['port_pro_38']);
	$mail_pro = ($_POST['mail_pro_38']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['39'])) {
	$d = 39;
	$nom_membre = ($_POST['nom_39']);
	$prenom_membre = ($_POST['prenom_39']);
	$indicatif_membre = ($_POST['indicatif_39']);
	$tel_fixe_perso = ($_POST['fixe_perso_39']);
	$tel_portable_perso = ($_POST['port_perso_39']);
	$mail_perso = ($_POST['mail_perso_39']);
	$tel_fixe_pro = ($_POST['fixe_pro_39']);
	$tel_portable_pro = ($_POST['port_pro_39']);
	$mail_pro = ($_POST['mail_pro_39']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['40'])) {
	$d = 40;
	$nom_membre = ($_POST['nom_40']);
	$prenom_membre = ($_POST['prenom_40']);
	$indicatif_membre = ($_POST['indicatif_40']);
	$tel_fixe_perso = ($_POST['fixe_perso_40']);
	$tel_portable_perso = ($_POST['port_perso_40']);
	$mail_perso = ($_POST['mail_perso_40']);
	$tel_fixe_pro = ($_POST['fixe_pro_40']);
	$tel_portable_pro = ($_POST['port_pro_40']);
	$mail_pro = ($_POST['mail_pro_40']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['41'])) {
	$d = 41;
	$nom_membre = ($_POST['nom_41']);
	$prenom_membre = ($_POST['prenom_41']);
	$indicatif_membre = ($_POST['indicatif_41']);
	$tel_fixe_perso = ($_POST['fixe_perso_41']);
	$tel_portable_perso = ($_POST['port_perso_41']);
	$mail_perso = ($_POST['mail_perso_41']);
	$tel_fixe_pro = ($_POST['fixe_pro_41']);
	$tel_portable_pro = ($_POST['port_pro_41']);
	$mail_pro = ($_POST['mail_pro_41']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['42'])) {
	$d = 42;
	$nom_membre = ($_POST['nom_42']);
	$prenom_membre = ($_POST['prenom_42']);
	$indicatif_membre = ($_POST['indicatif_42']);
	$tel_fixe_perso = ($_POST['fixe_perso_42']);
	$tel_portable_perso = ($_POST['port_perso_42']);
	$mail_perso = ($_POST['mail_perso_42']);
	$tel_fixe_pro = ($_POST['fixe_pro_42']);
	$tel_portable_pro = ($_POST['port_pro_42']);
	$mail_pro = ($_POST['mail_pro_42']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['43'])) {
	$d = 43;
	$nom_membre = ($_POST['nom_43']);
	$prenom_membre = ($_POST['prenom_43']);
	$indicatif_membre = ($_POST['indicatif_43']);
	$tel_fixe_perso = ($_POST['fixe_perso_43']);
	$tel_portable_perso = ($_POST['port_perso_43']);
	$mail_perso = ($_POST['mail_perso_43']);
	$tel_fixe_pro = ($_POST['fixe_pro_43']);
	$tel_portable_pro = ($_POST['port_pro_43']);
	$mail_pro = ($_POST['mail_pro_43']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['44'])) {
	$d = 44;
	$nom_membre = ($_POST['nom_44']);
	$prenom_membre = ($_POST['prenom_44']);
	$indicatif_membre = ($_POST['indicatif_44']);
	$tel_fixe_perso = ($_POST['fixe_perso_44']);
	$tel_portable_perso = ($_POST['port_perso_44']);
	$mail_perso = ($_POST['mail_perso_44']);
	$tel_fixe_pro = ($_POST['fixe_pro_44']);
	$tel_portable_pro = ($_POST['port_pro_44']);
	$mail_pro = ($_POST['mail_pro_44']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['45'])) {
	$d = 45;
	$nom_membre = ($_POST['nom_45']);
	$prenom_membre = ($_POST['prenom_45']);
	$indicatif_membre = ($_POST['indicatif_45']);
	$tel_fixe_perso = ($_POST['fixe_perso_45']);
	$tel_portable_perso = ($_POST['port_perso_45']);
	$mail_perso = ($_POST['mail_perso_45']);
	$tel_fixe_pro = ($_POST['fixe_pro_45']);
	$tel_portable_pro = ($_POST['port_pro_45']);
	$mail_pro = ($_POST['mail_pro_45']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['46'])) {
	$d = 46;
	$nom_membre = ($_POST['nom_46']);
	$prenom_membre = ($_POST['prenom_46']);
	$indicatif_membre = ($_POST['indicatif_46']);
	$tel_fixe_perso = ($_POST['fixe_perso_46']);
	$tel_portable_perso = ($_POST['port_perso_46']);
	$mail_perso = ($_POST['mail_perso_46']);
	$tel_fixe_pro = ($_POST['fixe_pro_46']);
	$tel_portable_pro = ($_POST['port_pro_46']);
	$mail_pro = ($_POST['mail_pro_46']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['47'])) {
	$d = 47;
	$nom_membre = ($_POST['nom_47']);
	$prenom_membre = ($_POST['prenom_47']);
	$indicatif_membre = ($_POST['indicatif_47']);
	$tel_fixe_perso = ($_POST['fixe_perso_47']);
	$tel_portable_perso = ($_POST['port_perso_47']);
	$mail_perso = ($_POST['mail_perso_47']);
	$tel_fixe_pro = ($_POST['fixe_pro_47']);
	$tel_portable_pro = ($_POST['port_pro_47']);
	$mail_pro = ($_POST['mail_pro_47']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['48'])) {
	$d = 48;
	$nom_membre = ($_POST['nom_48']);
	$prenom_membre = ($_POST['prenom_48']);
	$indicatif_membre = ($_POST['indicatif_48']);
	$tel_fixe_perso = ($_POST['fixe_perso_48']);
	$tel_portable_perso = ($_POST['port_perso_48']);
	$mail_perso = ($_POST['mail_perso_48']);
	$tel_fixe_pro = ($_POST['fixe_pro_48']);
	$tel_portable_pro = ($_POST['port_pro_48']);
	$mail_pro = ($_POST['mail_pro_48']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['49'])) {
	$d = 49;
	$nom_membre = ($_POST['nom_49']);
	$prenom_membre = ($_POST['prenom_49']);
	$indicatif_membre = ($_POST['indicatif_49']);
	$tel_fixe_perso = ($_POST['fixe_perso_49']);
	$tel_portable_perso = ($_POST['port_perso_49']);
	$mail_perso = ($_POST['mail_perso_49']);
	$tel_fixe_pro = ($_POST['fixe_pro_49']);
	$tel_portable_pro = ($_POST['port_pro_49']);
	$mail_pro = ($_POST['mail_pro_49']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
}
elseif (isset($_POST['50'])) {
	$d = 50;
	$nom_membre = ($_POST['nom_50']);
	$prenom_membre = ($_POST['prenom_50']);
	$indicatif_membre = ($_POST['indicatif_50']);
	$tel_fixe_perso = ($_POST['fixe_perso_50']);
	$tel_portable_perso = ($_POST['port_perso_50']);
	$mail_perso = ($_POST['mail_perso_50']);
	$tel_fixe_pro = ($_POST['fixe_pro_50']);
	$tel_portable_pro = ($_POST['port_pro_50']);
	$mail_pro = ($_POST['mail_pro_50']);

	editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
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