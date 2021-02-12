<?php $titre = $titre ? $titre.' / ' : '';?>
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

<?php if($navbar || !isset($navbar)) { include 'composants/navbar.inc.php'; } ?>

	<div class="container">
	<section class="section">
