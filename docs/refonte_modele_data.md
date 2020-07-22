# Modèle de données

## Gestion multi-session

Pour prendre en charge les sessions multiples, on peut faire une table pour lister les sessions.
Le préfixe est une valeur alphanumérique de 8 caractères type [0-9a-z]

| Champ      | Type        | Role |
|------------|-------------|------|
| prefix     | VARCHAR(8)  | Préfixe des tables de la session (clé primaire) |
| type       | VARCHAR(8)  | Type d'activation (exercice/reel) |
| created    | DATETIME    | Date de création |
| start_date | DATETIME    | Début de l'activation |
| stop_date  | DATETIME    | Fin de l'activation |
| archived   | BOOLEAN     | Mode archive: contenu en lecture seule si vrai |
| name       | VARCHAR(64) | Nom de la session, affiché pour l'utilisateur (index fulltext) |
| reference  | VARCHAR(64) | Référence pour l'administration (index fulltext) |

Les tables spécifiques à la gestion d'une session sont nommées en sous la forme `<prefixe>_<nom_table>`.

## Inventaire des tables

| Table            | Spécifique session? | Description, remarques |
|------------------|---------------------|------------------------|
| passwd           | non                 | Contient les crédentiels |
| sessions         | non                 | Listes des sessions stockées sur le serveur |
| membres          | non                 | Liste des membres |
| station_locale   | non                 | Attributs liés à la station installée (permet de copier les attributs pour une session) |
| cadre_activation | oui                 | A supprimer, maintenant qu'on a la table sessions |
| station          | oui                 | Attributs liés à la station activée pour une session |
| main_courante    | oui                 | Main courante |
| releve_sater     | oui                 | Relevés SATER |
| membres_reseau   | oui                 | Liste des membres participant à une activation |

