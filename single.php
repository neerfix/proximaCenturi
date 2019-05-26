<?php get_header(); ?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <div class="header-img--bg">
        <h1 class="header-title"><?php the_title(); ?></h1>
        <?php the_post_thumbnail('medium_large'); ?>
    </div>
<div class="container <?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
            d-flex
        <?php endif; ?>">
    <article class="post <?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
    col-8
<?php endif; ?>">
        <h1 class="title-article"><?php the_title(); ?></h1>
        <div class="post__content">
            <?php the_content(); ?>
        </div>

        <div class="post__meta">
            <div class="author">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
                <p>Publié le <?php the_date(); ?> <br/>
                par <?php the_author(); ?></p>
            </div>
            <div class="category">
                Catégorie(s)
                <?php the_category(); ?>
            </div>
            <div class="tags">
                Étiquette(s)
                <?php the_tags(); ?>
            </div>
        </div>
        <br>
        <br>
        <br>
    </article>
    <?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
    <div class="col-4 sidebar">
            <ul id="sidebar-right">
                <?php dynamic_sidebar( 'sidebar-right' ); ?>
            </ul>
    </div>
    <?php endif; ?>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>