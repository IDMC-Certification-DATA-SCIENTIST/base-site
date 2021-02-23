<?php $participations = participations_getParIdTrajet($trajet['id']); ?>

<div class="box trajet">
    <?php include './composants/trajet-header.composant.php'; ?>

    <div class="tag mt-2">
        <?php if (count($participations)) { ?>
            <?php echo count($participations); ?> participant(s)
        <?php } else { ?>
            Aucun participant
        <?php } ?>
    </div>

    <div class="buttons mt-4">
        <a href="informations.php?id=<?php echo $trajet['id']; ?>" class="button is-warning">ℹ Plus d'informations</a>
        <?php include './composants/trajet-boutons.composant.php'; ?>
    </div>
</div>