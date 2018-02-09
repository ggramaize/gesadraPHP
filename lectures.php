<?php

function lectureTypeActivation($bdd){

	$req_type_activation = $bdd->query('SELECT type FROM cadre_activation WHERE id="1" ');
	while ($val_type_activation = $req_type_activation->fetch())
	{
    $type_activation = $val_type_activation['type'];
	}
	return ($type_activation);
}

function lectureStationLocale($bdd){

	$req_station_locale = $bdd->query('SELECT indicatif, ville, departement, service, site_implentation FROM station_locale WHERE id="1" ');
	while ($val_station_locale = $req_station_locale->fetch())
	{
    $indicatif_station = $val_station_locale['indicatif'];
    $ville = $val_station_locale['ville'];
    $departement = $val_station_locale['departement'];
    $service = $val_station_locale['service'];
    $site_implentation = $val_station_locale['site_implentation'];
	}
	return array($indicatif_station, $ville, $departement, $service, $site_implentation);
}

