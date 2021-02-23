<?php


/**
 * Redirige vers la page dont l'url est passée en paramètre
 *
 * @param  mixed $destination Url de la page (absolute : https://google.com ou relative : /dossier/page.html)
 * @return void
 */
function redirection($destination)
{
	header('Location: ' . $destination);
	exit;
}

/**
 * Affiche le header du site : balise `<head>` et navbar
 *
 * @param  mixed $titre Le titre de la page (balise `<title>`) [facultatif]
 * @param  mixed $navbar Afficher la navbar [Par défaut: true]
 * @return void
 */
function headerSite($titre = false, $navbar = true)
{
	include RACINE . 'layout/header.inc.php';
}

/**
 * Affiche le footer du site
 *
 * @return void
 */
function footerSite()
{
	include RACINE . 'layout/footer.inc.php';
	exit;
}


/**
 * Affiche le Favicon dans le <head> du site
 * Le favicon est renseigné dans le fichier config.php sous la valeur FAVICON_SITE
 *
 * @return void
 */
function favicon()
{
	echo '<link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>' . FAVICON_SITE . '</text></svg>">';
}



/**
 * Afficher le détail du contenu d'une ou plusieures variables passées en paramètres
 *
 * @param  mixed $var1 Une varibale à debugger
 * @param  mixed $var2 Une varibale à debugger [facultatif]
 * @param  mixed $var3 Une varibale à debugger [facultatif]
 * ...
 * @return void
 */
function debug()
{
	$traces = debug_backtrace();
	$files = [];
	foreach ($traces as $cpt => $trace) {
		$file = str_replace(RACINE, '', $trace['file']);
		$line = $trace['line'];
		$files[] = '<p><small>' . $file . ' (ligne ' . $line . ')</small></p>';
	}
	echo '<div style="font-family:monospace;">';
	echo implode('', $files) . '<pre style="background:#ccc;padding:1em;">';
	echo htmlspecialchars(print_r(func_get_args(), true));
	echo '</pre>';
	echo '</div>';
	exit;
}
