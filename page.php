<?php get_header(); ?>
    <h1>Le blog Capitaine WP</h1>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

<div class="container text-white">
    <article class="post">
        <h2><?php the_title(); ?></h2>

        <p><?php the_content(); ?></p>

        <p>
            <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
        </p>
    </article>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>