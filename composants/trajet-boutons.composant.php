<?php if (trajet_estDisponible($trajet)) { ?>
    <a href="participer.php?id=<?php echo $trajet['id']; ?>" class="button is-primary">🚗 Participer à cet trajet</a>
<?php } else { ?>
    <button class="button is-danger" disabled>🛑 Ce trajet n'est plus disponible</button>
<?php } ?>