<div class="box">
    <div class="columns">
        <div class="column">
            <b><?php echo $participation['prenom']; ?> <?php echo $participation['nom']; ?></b>
            <?php echo $participation['email']; ?>

        </div>
        <div class="buttons">
            <a href="participer.php?annuler=<?php echo $participation['id']; ?>" class="button is-warning is-link is-small ">Annuler</a>
        </div>
    </div>
</div>