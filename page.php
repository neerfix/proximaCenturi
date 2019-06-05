<?php get_header(); ?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

<div class="container text-white text-center">
    <article class="post">
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
    </article>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>