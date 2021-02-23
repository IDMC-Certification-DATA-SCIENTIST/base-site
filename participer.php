<?php include 'includes/principal.php';

if (isset($_GET['annuler'])) {
    if ($participation = participation_getParId($_GET['annuler'])) {
        participation_annuler($participation['id']);
        redirection('informations.php?id=' . $participation['trajet_id']);
    }
}

if (isset($_POST['participation'])) {
    $participation = $_POST['participation'];
    participation_ajouter($participation);
    redirection('informations.php?id=' . $participation['trajet_id']);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $trajet = trajet_getParId($id);

    if ($trajet) {
        $titre = 'Participer au trajet ' . $trajet['ville_depart'] . ' -> ' . $trajet['ville_arrivee'];
        headerSite($titre); ?>

        <h1 class="title">Participer un trajet</h1>
        <h2 class="subtitle">Remplissez le formulaire ci-dessous pour participer. <b>Tous les champs sont obligatoires.</b></h2>

        <div class="box trajet">
            <?php include './composants/trajet-header.composant.php'; ?>
        </div>

        <form method="post">
            <input type="hidden" name="participation[trajet_id]" value="<?php echo $trajet['id']; ?>">
            <div class="field">
                <label class="label">Nom</label>
                <input class="input" type="text" name="participation[nom]" required>
            </div>
            <div class="field">
                <label class="label">Prénom</label>
                <input class="input" type="text" name="participation[prenom]" required>
            </div>
            <div class="field">
                <label class="label">E-Mail</label>
                <input class="input" type="email" name="participation[email]" required>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Valider votre participation</button>
                </div>
                <div class="control">
                    <a href="informations.php?id=<?php echo $trajet['id']; ?>" class="button is-link is-light">Annuler</a>
                </div>
            </div>
        </form>


<?php
        footerSite();
    }
}
