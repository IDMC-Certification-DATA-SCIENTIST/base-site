<?php 
/**
	Header : affiche la section HEAD du site ainsi que la navbar
	La navbar peut être masquée si la variable $navbar = false;
 */

$navbar = !empty($navbar) || !isset($navbar);
$titre = $titre ? $titre.' / ' : ''

?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?=$titre.NOM_SITE;?></title>
	<?php favicon();?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
	<link rel="stylesheet" href="css/style.css">	
</head>
<body>


<?php 
if($navbar) { 
	include 'composants/navbar.composant.php'; 
} 
?>

	<div class="container">
	<section class="section">
