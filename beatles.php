<?php include 'includes/principal.php';

$beatles = beatles_getAll();

$unBeatleAuHasard = beatles_getOneRandom();

headerSite(); ?>

<div class="columns">
    <div class="column">

        <h1 class="title">Les Beatles</h1>
        <h2 class="subtitle">Les membres du groupe</h2>

        <?php foreach ($beatles as $beatle) { ?>
            <?php include './composants/ligne-beatle.composant.php'; ?>
        <?php } ?>

    </div>
    <div class="column is-one-quarter">

        <h2 class="title">Un Beatle au hasard</h3>
        <h3 class="subtitle">Recharger la page pour changer</h3>
        <?php include './composants/carte-beatle.composant.php'; ?>


    </div>
</div>

<?php

footerSite(); ?>