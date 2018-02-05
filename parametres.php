<?php 

// Nom d'utilisateur du compte sur le serveur de BDD
define( DB_USERNAME, 'root');

// Mot de passe du compte sur le serveur de BDD
define( DB_PASSWORD, '');

// Nom d'hote ou IP du serveur de BDD
define( DB_HOST, 'localhost');

// Nom de la BDD à utiliser
define( DB_NAME, 'gesadra');


// -- NE PAS MODIFIER EN DESSOUS DE CETTE LIGNE
// Construction du DSN pour PDO
define( DB_PDO_DSN, 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8');

?>
