<?php include 'includes/principal.php';


$unBeatleAuHasard = beatles_getOneRandom();

headerSite(); ?>

<div class="columns">
    <div class="column is-half is-offset-one-quarter">

        <h2 class="title">Un Beatle au hasard</h3>
            <h3 class="subtitle">Recharger la page pour changer</h3>

            <?php include './composants/carte-beatle.composant.php'; ?>


    </div>
</div>
<?php

debug($unBeatleAuHasard);

?>
<?php footerSite(); ?>