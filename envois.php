<?php


function envoiTypeActivation($bdd, $type_activation){
	$req_cadre_activation = $bdd->prepare('UPDATE cadre_activation SET type = :type_activation WHERE id = "1" ')or die(print_r($bdd->errorInfo()));
        $req_cadre_activation->execute(array(
            'type_activation' => $type_activation
        ));
}

function envoiStationLocale($bdd, $indicatif_station, $ville, $service, $departement, $site_implentation){
	$req_station_locale = $bdd->prepare('UPDATE station_locale SET indicatif = :indicatif_station, ville = :ville, departement = :departement, service = :service, site_implentation = :site_implentation WHERE id = "1" ')or die(print_r($bdd->errorInfo()));
        $req_station_locale->execute(array(
            'indicatif_station' => $indicatif_station,
            'ville' => $ville,
            'departement' => $departement,
            'service' => $service,
            'site_implentation' => $site_implentation
        ));
        
}

function editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d){

	$req_edit_membre = $bdd->prepare('UPDATE membres SET nom_membre = :nom_membre, prenom_membre = :prenom_membre, indicatif_membre = :indicatif_membre, tel_fixe_perso = :tel_fixe_perso, tel_portable_perso = :tel_portable_perso, mail_perso = :mail_perso, tel_fixe_pro = :tel_fixe_pro, tel_portable_pro = :tel_portable_pro, mail_pro = :mail_pro WHERE id = "'.$d.'" ')or die(print_r($bdd->errorInfo()));
        $req_edit_membre->execute(array(
            'nom_membre' => $nom_membre,
            'prenom_membre' => $prenom_membre,
            'indicatif_membre' => $indicatif_membre,
            'tel_fixe_perso' => $tel_fixe_perso,
            'tel_portable_perso' => $tel_portable_perso,
            'mail_perso' => $mail_perso,
            'tel_fixe_pro' => $tel_fixe_pro,
            'tel_portable_pro' => $tel_portable_pro,
            'mail_pro' => $mail_pro
        ));
}

function editMembreSiExiste( $rangForm)
{
	if (isset($_POST["$rang"])) {
		$d = $rang;
		$nom_membre = ($_POST["nom_$rang"]);
		$prenom_membre = ($_POST["prenom_$rang"]);
		$indicatif_membre = ($_POST["indicatif_$rang"]);
		$tel_fixe_perso = ($_POST["fixe_perso_$rang"]);
		$tel_portable_perso = ($_POST["port_perso_$rang"]);
		$mail_perso = ($_POST["mail_perso_$rang"]);
		$tel_fixe_pro = ($_POST["fixe_pro_$rang"]);
		$tel_portable_pro = ($_POST["port_pro_$rang"]);
		$mail_pro = ($_POST["mail_pro_$rang"]);

		editMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro, $d);
	}
}


function nouveauMembre($bdd, $nom_membre, $prenom_membre, $indicatif_membre, $tel_fixe_perso, $tel_portable_perso, $mail_perso, $tel_fixe_pro, $tel_portable_pro, $mail_pro){

	$req_nouveau_membre = $bdd->prepare('INSERT INTO membres(nom_membre, prenom_membre, indicatif_membre, tel_fixe_perso, tel_portable_perso, mail_perso, tel_fixe_pro, tel_portable_pro, mail_pro) VALUES(:nom_membre, :prenom_membre, :indicatif_membre, :tel_fixe_perso, :tel_portable_perso, :mail_perso, :tel_fixe_pro, :tel_portable_pro, :mail_pro)')or die(print_r($bdd->errorInfo()));
                $req_nouveau_membre->execute(array(
                'nom_membre' => $nom_membre,
            	'prenom_membre' => $prenom_membre,
            	'indicatif_membre' => $indicatif_membre,
            	'tel_fixe_perso' => $tel_fixe_perso,
            	'tel_portable_perso' => $tel_portable_perso,
            	'mail_perso' => $mail_perso,
            	'tel_fixe_pro' => $tel_fixe_pro,
            	'tel_portable_pro' => $tel_portable_pro,
            	'mail_pro' => $mail_pro
                ));
}

function editMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire, $d){

    $req_edit_membre_reseau = $bdd->prepare('UPDATE membres_reseau SET indicatif = :indicatif, alias_tactique = :alias_tactique, operateur = :operateur, etat = :etat, commentaire = :commentaire WHERE id = "'.$d.'"')or die(print_r($bdd->errorInfo()));
                $req_edit_membre_reseau->execute(array(
                'indicatif' => $indicatif,
                'alias_tactique' => $alias_tactique,
                'operateur' => $operateur,
                'etat' => $etat,
                'commentaire' => $commentaire
                ));
}

function nouveauMembreReseau($bdd, $indicatif, $alias_tactique, $operateur, $etat, $commentaire){
    $req_nouveau_membre_reseau = $bdd->prepare('INSERT INTO membres_reseau (indicatif, alias_tactique, operateur, etat, commentaire) VALUES(:indicatif, :alias_tactique, :operateur, :etat, :commentaire)')or die(print_r($bdd->errorInfo()));
                $req_nouveau_membre_reseau->execute(array(
                'indicatif' => $indicatif,
                'alias_tactique' => $alias_tactique,
                'operateur' => $operateur,
                'etat' => $etat,
                'commentaire' => $commentaire
                ));
}

function nouvelleMainCourante($bdd, $date_heure, $recu_de, $emis_vers, $degre_urgence, $mode_trans, $message){
    $req_nouvelle_main_courante = $bdd->prepare('INSERT INTO main_courante (date_heure, recu_de, emis_vers, degre_urgence, mode_transmission, message) VALUES(:date_heure, :recu_de, :emis_vers, :degre_urgence, :mode_transmission, :message)')or die(print_r($bdd->errorInfo()));
                $req_nouvelle_main_courante->execute(array(
                'date_heure' => $date_heure,
                'recu_de' => $recu_de,
                'emis_vers' => $emis_vers,
                'degre_urgence' => $degre_urgence,
                'mode_transmission' => $mode_trans,
                'message' => $message
                ));

}

function nouveauReleveSater($bdd, $date_heure, $membre, $syst_coor, $datum, $latitude, $longitude, $direction_releve, $signal_releve, $commentaire){
    $req_nouveau_releve_sater = $bdd->prepare('INSERT INTO releve_sater (date_heure, emeteur, syst_coor, datum, latitude, longitude, direction, signal_releve, commentaire) VALUES(:date_heure, :emeteur, :syst_coor, :datum, :latitude, :longitude, :direction, :signal_releve, :commentaire)')or die(print_r($bdd->errorInfo()));
                $req_nouveau_releve_sater->execute(array(
                'date_heure' => $date_heure,
                'emeteur' => $membre,
                'syst_coor' => $syst_coor,
                'datum' => $datum,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'direction' => $direction_releve,
                'signal_releve' => $signal_releve,
                'commentaire' => $commentaire
                ));

}

?>
