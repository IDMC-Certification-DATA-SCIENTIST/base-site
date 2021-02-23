    <h1 class="title">
        📍 <?php echo $trajet['ville_depart']; ?> »
        🏁 <?php echo $trajet['ville_arrivee']; ?>
    </h1>
    <div class="photo"><img src="https://tools.sopress.net/unsplash/?size=regular&one=<?php echo $trajet['ville_arrivee']; ?>,city"></div>
    <h2 class="subtitle">
        Départ le <?php echo $trajet['date_depart']; ?>
        à <?php echo $trajet['heure_depart']; ?>
    </h2>

    <p>
        Trajet créé par
        <?php echo $trajet['nom']; ?>
        <?php echo $trajet['prenom']; ?> (<b><?php echo $trajet['email']; ?></b>)
    </p>