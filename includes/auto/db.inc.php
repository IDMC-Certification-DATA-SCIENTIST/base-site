<?php


function db_connecter()
{
    $db = @new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($db->connect_errno) {
        headerSite('Erreur', false);
        message('Erreur de connexion à la base de données', $db->connect_error, 'erreur');
        footerSite();
    }

    $db->query('SET NAMES utf8');
    return $db;
}
