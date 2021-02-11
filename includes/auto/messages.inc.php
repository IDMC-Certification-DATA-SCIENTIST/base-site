<?php


/**
 * Affiche un message sur la page
 *
 * @param  mixed $titre Titre du message (court)
 * @param  mixed $contenu Contenu texte du message (plus long)
 * @param  mixed $type Type du message : alerte, erreur, ou false pour un message "neutre"
 * @return void
 */
function message($titre, $contenu, $type=false)
{ 
    if($type == 'erreur') {
        $class='is-danger';
    } else if($type == 'alerte') {
        $class='is-warning';
    } else {
        $class='is-primary';
    }
    ?>
    <section class="section">
        <article class="message <?php echo $class;?>">
            <div class="message-header">
                <strong><?php echo $titre; ?></strong>
            </div>
            <div class="message-body">
                <?php echo $contenu; ?>
            </div>
        </article>
    </section>
<?php }
