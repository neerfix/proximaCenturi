<footer class="site__footer">
    <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
    <a href="<?php bloginfo('url') ?>" class="logo">
        <img src="https://www.nicolasnotararigo.com/wp-content/uploads/2019/06/logo.png" alt="<?php bloginfo('name') ?> logo" class="logo">
    </a>
    <div class="footer-menu--right">
        <ul class="menu">
            <li><a href="https://www.linkedin.com/in/nicolas-notararigo/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="https://github.com/Neerfix" target="_blank"><i class="fab fa-github"></i></a></li>
        </ul>
        <p>&copy; <?php date('Y'); ?> Copyright. Tous droits réservés.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
