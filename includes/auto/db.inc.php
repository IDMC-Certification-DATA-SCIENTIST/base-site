<?php
/**
 * Fonctions utilisées pour interroger la base de données
 */


/**
 * Se connecter a ka base de données
 * Configuration dans le fichier config.php
 *
 * @return void
 */
function db_connect()
{
    $db = @new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($db->connect_errno) {
        headerSite('Erreur', false);
        message('Erreur de connexion à la base de données', $db->connect_error, 'erreur');
        footerSite();
    }

    $db->query('SET NAMES utf8');
    $GLOBALS['db'] = $db;
    return $db;
}

/**
 * Faire une requète SELECT et récupérer tous les éléments sélectionnés par la requète
 *
 * @param  string $query Une requète SQL 'SELECT ...'
 * @return array Un tableau contenant la liste des éléménts retournées par la requète
 */
function db_selectAll($query) {
    if($resultat = $GLOBALS['db']->query($query)) {
        return $resultat->fetch_all(MYSQLI_ASSOC);
    } else {
        db_error($query);
    }

}

/**
 * Faire une requète SELECT et récupérer un seul élément
 *
 * @param  string $query Une requète SQL 'SELECT ... WHERE id = ...'
 * @return array l'élément sélectionné
 */
function db_selectOne($query) {
    if($resultat = $GLOBALS['db']->query($query)) {
        return $resultat->fetch_assoc();
    } else {
        db_error($query);
    }

}

/**
 * Envoyer une requète SQL INSERT INTO à la base de données
 *
 * @param  mixed $query La requète SQL 'INSERT INTO ...'
 * @return int L'identifiant numérique de l'élément créé
 */
function db_insert($query) {
    $GLOBALS['db']->query($query);
    db_error($query);
    return $GLOBALS['db']->insert_id;
}


/**
 * Envoyer une requète SQL à la base de données (sans données retournées)
 *
 * @param  mixed $query La requète SQL (UPDATE, INSERT INTO, DELETE)
 * @return void
 */
function db_query($query) {
    $GLOBALS['db']->query($query);
    db_error($query);
}


/**
 * Afficher une erreur de base de données
 *
 * @param  mixed $query La requète SQL qui a causé l'erreur
 * @return void
 */
function db_error($query) {
    if($GLOBALS['db']->error) {
        message('Erreur SQL','<code>'.$query.'</code><br><br>'.$GLOBALS['db']->error, 'erreur');
    }
}


/**
 * Protège les caractères spéciaux d'une chaîne de caractères 
 * pour l'utiliser dans une requête SQL
 * (en prenant en compte le jeu de caractères courant de la connexion)
 *
 * @param  mixed $donnee La données à encoder
 * @return mixed La donnée encodée
 */
function db_esc($donnee){
    return $GLOBALS['db']->real_escape_string($donnee);
}