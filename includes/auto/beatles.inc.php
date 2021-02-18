 <?php

/**
 * Retourne la liste de tous les Beatles
 *
 * @return array Tableau de tableaux associatifs des Beatles
 */
function beatles_getAll()
{
    return db_selectAll('SELECT * FROM beatles ORDER BY ordre ASC');
}

/**
 * Retourne un Beatle au hasard
 *
 * @return array Tableau associatif du Beatle
 */
function beatles_getOneRandom()
{
    return db_selectOne('SELECT * FROM beatles ORDER BY RAND() LIMIT 1');
}
