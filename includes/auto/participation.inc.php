<?php

/**
 * Annuler une participation à un trajet
 *
 * @param  int $id L'identifiant unique de la participation
 */

function participation_annuler($id)
{
    db_query('DELETE FROM participations WHERE id = "' . db_esc($id) . '"');
}

/**
 * Ajouter une participation à un trajet
 *
 * @param  array $participation les données du participant
 * @return int id L'identifiant unique de la participation créée
 */

function participation_ajouter($participation)
{

    $requete = 'INSERT INTO participations (trajet_id, nom, prenom, email) 
    VALUES ( "' . $participation['trajet_id'] . '", "' . $participation['nom'] . '", "' . $participation['prenom'] . '", "' . $participation['email'] . '")';
    $id = db_insert($requete);

    return $id;
}


/**
 * Retourne une participation
 *
 * @param  int $id identifiant de la participation
 * @return array Une participation
 */
function participation_getParId($id)
{
    return db_selectOne(
        'SELECT * FROM participations WHERE id = ' . db_esc($id)
    );
}



/**
 * Retourne les participartions à un trajet donné
 *
 * @param  int $id identifiant du trajet
 * @return array Les participations
 */
function participations_getParIdTrajet($trajet_id)
{
    return db_selectAll(
        'SELECT * FROM participations WHERE trajet_id = ' . db_esc($trajet_id)
    );
}
