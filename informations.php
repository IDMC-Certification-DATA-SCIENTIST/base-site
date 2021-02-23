<?php include 'includes/principal.php';

$trajet = false;
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $trajet = trajet_getParId($id);

    $participations = participations_getParIdTrajet($trajet['id']);
    if ($trajet) {
        headerSite($trajet['ville_depart'] . ' ' . $trajet['ville_arrivee']); ?>

        <div class="box trajet">
            <?php include './composants/trajet-header.composant.php'; ?>

        </div>


        <div class="box">
            <?php if (count($participations)) { ?>
                <h2 class="title is-5">
                    <?php echo count($participations); ?> participant(s)
                </h2>
            <?php } ?>
            <?php if (count($participations)) { ?>
                <?php foreach ($participations as $participation) { ?>
                    <?php include './composants/participation.composant.php'; ?>
                <?php } ?>
            <?php } else { ?>
                <h2 class="subtitle">
                    Il n'y a aucun participant à ce trajet pour l'instant.
                </h2>
            <?php } ?>

            <?php include './composants/trajet-boutons.composant.php'; ?>
        </div>

        <?php if ($trajet['modele']) { ?>
            <div class="box">
                <h1 class="title">
                    Le véhicule
                </h1>
                <h2 class="subtitle">
                    <?php echo $trajet['modele']; ?>
                    <?php echo $trajet['marque']; ?>
                </h2>

                <div class="photo"><img src="https://tools.sopress.net/unsplash/?size=regular&one=<?php echo $trajet['modele'] . ',' . $trajet['marque']; ?>"></div>

            </div>
        <?php } ?>


<?php footerSite();
    }
}

if (!$trajet) {
    headerSite('Erreur !');
    message('Erreur', 'Le trajet demandé n\'existe pas !', 'erreur');
    footerSite();
}
