<!-- Afficher un Beatle dans la liste -->
<div class="card">
    <div class="card-content">
        <div class="media">
            <div class="media-left">
                <figure class="image is-48x48">
                    <img src="<?php echo $beatle['photo']; ?>" alt="Photo de <?php echo $beatle['prenom'] . ' ' . $beatle['nom']; ?>">
                </figure>
            </div>
            <div class="media-content">
                <p class="subtitle is-6"><?php echo $beatle['prenom']; ?></p>
                <p class="title is-4"><?php echo $beatle['nom']; ?></p>
            </div>
        </div>
    </div>
</div>