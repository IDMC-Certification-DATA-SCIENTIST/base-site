<?php $titre = $titre ? $titre.' / ' : '';?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?=$titre.NOM_SITE;?></title>
	<link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🚘</text></svg>">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
	<link rel="stylesheet" href="css/style.css">	
</head>
<body>

<?php if($navbar || !isset($navbar)) { include 'composants/navbar.inc.php'; } ?>

	<div class="container">
	<section class="section">
