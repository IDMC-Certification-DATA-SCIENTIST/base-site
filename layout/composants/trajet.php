<section class="section">
    <div class="card trajet">
        <?php if (!$id) { ?><a href="trajet.php?id=<?php echo $trajet['id']; ?>"></a><?php } ?>
        <div class="card-content">
            <div class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img src="<?php echo avatarUtilisateur($trajet['email']); ?>">
                    </figure>
                </div>
                <div class="media-content">
                    <p class="title is-4"><?php echo $trajet['prenom'] . ' ' . $trajet['nom']; ?></p>
                    <p class="subtitle is-6"><?php echo $trajet['email']; ?></p>
                </div>
            </div>

            <div class="content">
                <div class="columns">
                    <div class="column">
                        <h2 class="title is-5">Ville de départ</h2>
                        <p class="subtitle"><?php echo $trajet['ville_depart']; ?></p>
                    </div>
                    <div class="column">

                    </div>
                    <div class="column">
                        <h2 class="title is-5">Ville d'arrivée</h2>
                        <p class="subtitle"><?php echo $trajet['ville_arrivee']; ?></p>
                    </div>
                </div>

                <p class="title is-7">Place(s) disponible(s) : <?php echo $trajet['places']; ?></p>
                <?php if ($trajet['places'] != $trajet['places_restantes']) { ?>
                    <p class="title is-5">Place(s) restante(s) : <?php echo $trajet['places_restantes']; ?></p>
                <?php } ?>
                <?php if ($trajet['modele']) { ?>
                    <p>🚘 <?php echo $trajet['modele']; ?> (<?php echo $trajet['marque']; ?>)</p>
                <?php } ?>

                <time>Départ prévu le <?php echo $trajet['date_depart'] . ' à ' . $trajet['heure_depart']; ?></time>
            </div>

            <?php if ($id) { ?>

                <p class="buttons">
                    <a href="" class="button is-info">✔ Particper à ce trajet</a>
                </p>
            <?php } ?>
        </div>
    </div>
</section>