<footer class="site__footer">
    <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
</footer>

<section class="bg-blue col-12 p-2 text-center text-white" wfd-id="1">
    <p><?= get_bloginfo('name'); ?> © <?= date('Y'); ?> - Thème Développer par <a href="https://www.nicolasnotararigo.com" target="_blank">Nicolas Notararigo</a> -  Tous droits réservés.</p>
</section>

<?php wp_footer(); ?>
</body>
</html>
