<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'site' ); ?>>


<header class="site__header">
    <nav class="navbar fixed-top d-flex navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand ml-lg-5 d-flex" href="<?= get_site_url(); ?>"><div class="logo"></div> &nbsp; <?= get_bloginfo('name'); ?></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
        </div>
    </nav>
</header>