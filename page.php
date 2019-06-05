<?php get_header(); ?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

<div class="container">
    <article class="post">
        <h1 class="text-center"><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
    </article>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>