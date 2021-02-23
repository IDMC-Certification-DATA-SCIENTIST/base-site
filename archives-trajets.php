<?php include 'includes/principal.php';

$trajets = trajets_getArchives();
?>

<?php headerSite('Archives des trajets'); ?>
<h1 class="title">Les trajets passés</h1>

<?php foreach ($trajets as $trajet) { ?>
    <?php include './composants/trajet.composant.php'; ?>
<?php } ?>

<?php footerSite(); ?>