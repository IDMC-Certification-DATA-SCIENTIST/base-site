<?php

/**
 * Retourne la liste de tous les trajets disponibles
 *
 * @return array Tableau de tableaux associatifs des trajets
 */
function trajets_getDisponibles()
{
    return db_selectAll('SELECT * FROM trajets WHERE date_depart > CURRENT_DATE OR (date_depart = CURRENT_DATE AND heure_depart > CURRENT_TIME) ORDER BY date_depart ASC, heure_depart ASC');
}

/**
 * Retourne un trajet donné
 *
 * @param  int $id identifiant du trajet
 * @return array Un trajet
 */
function trajet_getParId($id)
{
    return db_selectOne(
        'SELECT * FROM trajets WHERE id = ' . db_esc($id)
    );
}

/**
 * Retourne la liste de tous les trajets archivés (non disponibles)
 *
 * @return array Tableau de tableaux associatifs des trajets
 */
function trajets_getArchives()
{
    return db_selectAll('SELECT * FROM trajets WHERE date_depart < CURRENT_DATE OR (date_depart = CURRENT_DATE AND heure_depart < CURRENT_TIME) ORDER BY date_depart ASC, heure_depart ASC');
}


/**
 * Indique si le trajet envoyé à la fonction est disponible ou pas
 *
 * @param  array $trajet Un trajet
 * @return bool true si le trajet est disponible
 */

function trajet_estDisponible($trajet)
{
    $maintenant = time();
    $date_depart = strtotime($trajet['date_depart'] . ' ' . $trajet['heure_depart']);
    if ($date_depart > $maintenant) {
        return true;
    }
}



/**
 * Créer un nouveau trajet dans la base de données
 *
 * @param  array $trajet les données du trajet
 * @return int id L'identifiant unique du trajet créé
 */

function trajet_creerNouveau($trajet)
{
    $requete = 'INSERT INTO trajets 
    (nom, prenom, email, ville_depart, ville_arrivee, modele, marque, date_depart, heure_depart) 
    VALUES 
    ( "' . db_esc($trajet['nom']) . '", "' . db_esc($trajet['prenom']) . '", "' . db_esc($trajet['email']) . '",  "' . db_esc($trajet['ville_depart']) . '", "' . db_esc($trajet['ville_arrivee']) . '", "' . db_esc($trajet['modele']) . '", "' . db_esc($trajet['marque']) . '", "' . db_esc($trajet['date_depart']) . '", "' . db_esc($trajet['heure_depart']) . '")';
    $id = db_insert($requete);

    return $id;
}
