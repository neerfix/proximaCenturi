<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php
    if($_POST){
        echo '<title>Message envoyé</title>';
    } ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cecc6a8642.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'site' ); ?>>
<header class="header">
    <a href="<?php bloginfo('url') ?>" class="logo" title="<?php bloginfo('name') ?>">
        <img src="https://www.nicolasnotararigo.com/wp-content/uploads/2019/06/logo.png" alt="<?php bloginfo('name') ?> logo" title="<?php bloginfo('name') ?> logo" class="logo">
    </a>
</header>
<div class="right-menu">
    <a href="<?php bloginfo('url') ?>/contact" class="btn btn-red">
        <i class="fas fa-dove"></i>
        <span>Me contacter</span>
    </a>
    <a href="<?php bloginfo('url') ?>/about" class="btn btn-blue">
        <i class="fas fa-info-circle"></i>
        <span>A propos</span>
    </a>
</div>
