<?php get_header(); ?>

    <h1 class="site__heading">Le blog</h1>

    <div class="site__blog">
        <main class="site__content">
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                <article class="post">
                    //
                </article>
            <?php endwhile; endif; ?>
        </main>

        <aside class="site__sidebar">
            <ul>
                <?php dynamic_sidebar( 'blog-sidebar' ); ?>
            </ul>
        </aside>
    </div>
<?php get_footer(); ?>