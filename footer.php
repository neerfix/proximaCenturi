<footer class="site__footer">
    <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
    <a href="<?php get_home_url(); ?>" class="logo">
        <img src="http://notararigo-nicolas.local/wp-content/uploads/2019/05/logo.png" alt="" class="logo">
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
