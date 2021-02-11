<?php


/**
 * Redirige vers la page dont l'url est passée en paramètre
 *
 * @param  mixed $destination Url de la page (absolute : https://google.com ou relative : /dossier/page.html)
 * @return void
 */
function redirection($destination) {
	header('Location: '.$destination);
	exit;
}

function headerSite($titre=false,$navbar=true) {
	include RACINE.'layout/header.inc.php';
}
function footerSite() {
	include RACINE.'layout/footer.inc.php';
	exit;
}
