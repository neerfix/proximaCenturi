<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cecc6a8642.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'site' ); ?>>
<header class="header">
    <div class="header-left" wfd-id="14">
        <a href="<?php bloginfo('url') ?>" class="logo" title="<?php bloginfo('name') ?>">
            <img src="https://www.nicolasnotararigo.com/wp-content/uploads/2019/06/logo.png" alt="<?php bloginfo('name') ?> logo" title="<?php bloginfo('name') ?> logo" class="logo">
        </a>
    </div>
    <div class="header-right" wfd-id="13">
        <a href="<?php bloginfo('url') ?>/contact/" class="btn btn-red">
            Me contacter
        </a>
    </div>
</header>