<?php


$chemin = dirname(realpath(__FILE__));
define('INCLUDES',$chemin.'/');
define('RACINE',realpath($chemin.'/..').'/');

/*
	Inclusion automatique de tous les fichiers php situés dans le dossier /includes/auto/
*/
foreach(glob(INCLUDES."/auto/*.inc.php") as $fichier) {
	include $fichier;
}


/*
	Configuration du site
	La configuration est située dans le fichier config/config.php
	Si le fichier est manquant, le site est "fermé"
*/
$config = INCLUDES.'config/config.php';
if(file_exists($config)) {
	include $config;
} else {
	headerSite('Erreur',false);
	message('Erreur de configuration','Le fichier <code>'.$config.'</code> n\'existe pas. Veuillez le créer en duplicant le fichier <code>config/config.php.modele</code>.','erreur');
	footerSite();
}

/*
	Connexion à la base de données
*/
$db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$db->query('SET NAMES utf8');