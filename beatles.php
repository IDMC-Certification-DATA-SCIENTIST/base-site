<?php include 'includes/principal.php'; ?>

<?php headerSite(); ?>

<body>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="title">Les Beatles</h1>
                    <h2 class="subtitle">Les membres du groupe</h2>
                    <?php
                    $beatles = db_selectAll('SELECT * FROM beatles ORDER BY ordre ASC');
                    ?>

                    <?php foreach ($beatles as $beatle) { ?>

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

                    <?php } ?>
                </div>
                <div class="column is-one-quarter">

                    <h2 class="title">Un Beatle au hasard</h3>
                    <h3 class="subtitle">Recharger la page pour changer</h3>
                    <?php
                    $id = rand(1, 4);
                    $beatleAuHasard = db_selectOne('SELECT * FROM beatles WHERE id = "' . db_esc($id) . '"');
                    ?>

                    <div class="card">
                        <div class="card-image">
                            <figure class="image">
                                <img src="<?php echo $beatleAuHasard['photo']; ?>" alt="Image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                <h3 class="subtitle">
                                    <?php echo $beatleAuHasard['prenom']; ?>
                                </h3>
                                <h2 class="title">
                                    <?php echo $beatleAuHasard['nom']; ?>
                                </h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php footerSite(); ?>