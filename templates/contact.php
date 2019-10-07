<?php
/*
Template Name: Contact
Template Post Type: page
*/

//require_once ('functions/recaptcha.php');

$message = $_POST['object'] . " de l'entreprise " . $_POST['entreprise'] . ", <br />" . $_POST['message'];
if($_POST){
    mail("nicolas.notararigo@ynov.com", $_POST['object'], $message);
}

get_header(); ?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

<div class="container">
    <article class="post">
        <h1 class="text-center"><?php the_title(); ?></h1>
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <h2>Formulaire de contact</h2>
                <p>Le formulaire de contact pour m'envoyer des pigeons éléctroniques automatiquement.</p>
                <form action="">
                    <div class="form-group">
                        <label for="name">Nom / Prénom</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nom / Prénom">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="email@contact.com">
                    </div>
                    <div class="form-group">
                        <label for="entreprise">Entreprise</label>
                        <input type="text" class="form-control" id="entreprise" placeholder="Entreprise">
                    </div>
                    <div class="form-group">
                        <label for="object">Objet</label>
                        <input type="text" class="form-control" name="object" id="object" placeholder="Objet">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                    </div>
                    <input type="submit" class="btn btn-blue" value="Libérer le pigeon">
                </form>
            </div>
            <div class="col-lg-4 col-sm-12">
                <h2>Coordonnées</h2>
                <p>Les coordonnées de contact pour vous débrouiller comme un grand ;)</p>
                <ul>
                    <li>Email: nicolas.notararigo@ynov.com</li>
                    <li>LinkedIn: <a href="https://www.linkedin.com/in/nicolas-notararigo/" target="_blank">Nicolas Notararigo</a></li>
                </ul>
            </div>
        </div>
    </article>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>