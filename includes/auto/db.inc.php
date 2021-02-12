<?php


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

function db_selectAll($query) {
    if($resultat = $GLOBALS['db']->query($query)) {
        return $resultat->fetch_all(MYSQLI_ASSOC);
    } else {
        db_error($query);
    }

}

function db_selectOne($query) {
    if($resultat = $GLOBALS['db']->query($query)) {
        return $resultat->fetch_assoc();
    } else {
        db_error($query);
    }

}


function db_error($query) {
    message('Erreur SQL','<code>'.$query.'</code><br><br>'.$GLOBALS['db']->error, 'erreur');    
}


function db_esc($donnee){
    return $GLOBALS['db']->real_escape_string($donnee);
}