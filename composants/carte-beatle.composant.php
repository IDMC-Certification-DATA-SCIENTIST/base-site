<!-- Afficher un Beatle en grand dans une carte -->
<div class="card">
    <div class="card-image">
        <figure class="image">
            <img src="<?php echo $unBeatleAuHasard['photo']; ?>" alt="Image">
        </figure>
    </div>
    <div class="card-content">
        <div class="content">
            <h3 class="subtitle">
                <?php echo $unBeatleAuHasard['prenom']; ?>
            </h3>
            <h2 class="title">
                <?php echo $unBeatleAuHasard['nom']; ?>
            </h2>

        </div>
    </div>
</div>