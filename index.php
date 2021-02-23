<?php include 'includes/principal.php';
$trajets = trajets_getDisponibles();
?>

<?php headerSite('Trajets'); ?>
<h1 class="title">Les trajets proposés</h1>
<h2 class="subtitle">
    Il y a <?php echo count($trajets); ?> trajet(s) disponible(s)
</h2>
<?php foreach ($trajets as $trajet) { ?>
    <?php include './composants/trajet.composant.php'; ?>
<?php } ?>

<?php footerSite(); ?>