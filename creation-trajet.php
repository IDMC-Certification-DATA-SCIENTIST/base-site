<?php include 'includes/principal.php';


if (isset($_POST['trajet'])) {
    $trajet = $_POST['trajet'];

    $id = trajet_creerNouveau($trajet);
    redirection('informations.php?id=' . $id);
}

?>

<?php headerSite('Proposer un trajet'); ?>
<h1 class="title">Proposer un trajet</h1>
<h2 class="subtitle">Remplissez le formulaire ci-dessous pour créer votre trajet. <b>Tous les champs sont obligatoires.</b></h2>

<form method="post">
    <div class="field">
        <label class="label">Nom</label>
        <input class="input" type="text" name="trajet[nom]" required>
    </div>
    <div class="field">
        <label class="label">Prénom</label>
        <input class="input" type="text" name="trajet[prenom]" required>
    </div>
    <div class="field">
        <label class="label">E-Mail</label>
        <input class="input" type="email" name="trajet[email]" required>
    </div>
    <div class="field">
        <label class="label">Ville de départ</label>
        <input class="input" type="text" name="trajet[ville_depart]" required>
    </div>
    <div class="field">
        <label class="label">Ville d'arrivée'</label>
        <input class="input" type="text" name="trajet[ville_arrivee]" required>
    </div>

    <div class="field">
        <label class="label">Modèle de véhicule</label>
        <input class="input" type="text" name="trajet[modele]" required>
    </div>
    <div class="field">
        <label class="label">Marque du véhicule</label>
        <input class="input" type="text" name="trajet[marque]" required>
    </div>

    <div class="field">
        <label class="label">Date</label>
        <input class="input" type="date" name="trajet[date_depart]" required>
    </div>
    <div class="field">
        <label class="label">Heure</label>
        <input class="input" type="time" name="trajet[heure_depart]" required>
    </div>


    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Valider le trajet</button>
        </div>
        <div class="control">
            <a href="index.php" class="button is-link is-light">Annuler</a>
        </div>
    </div>
</form>

<?php footerSite(); ?>