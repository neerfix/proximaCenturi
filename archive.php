<?php get_header(); ?>
<div class="container text-center mt-5 mb-5">
    <h1 class="site__heading text-white">Le blog</h1>
    <?php
        $recentPosts = new WP_Query();
        $recentPosts->query('showposts=10');
        $i = 0;
        ?>
        <div class="container mb-5">
            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post();
                if($i % 2): ?>
                    <article class="row mt-4 blog-article left">
                        <a href="<?php the_permalink() ?>" rel="bookmark" class="section-card--article col-lg-4 col-sm-12"
                           style="background: url('<?= the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center; border-radius: 4px 0 0 4px"></a>
                        <div class="col-lg-8 col-sm-12 bg-lightgrey p-4 br4">
                            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                            <?php the_category(); ?>
                            <?php the_tags('<div class="mestags">', '&nbsp;', '</div>'); ?>
                        </div>
                    </article>
                    <?php
                    $i++;
                else: ?>
                    <article href="<?php the_permalink() ?>" rel="bookmark" class="row mt-4 blog-article right">
                        <div class="col-lg-8 col-sm-12 bg-lightgrey p-4 bl4">
                            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                            <?php the_category(); ?>
                            <?php the_tags('<div class="mestags">', '&nbsp;', '</div>'); ?>
                        </div>
                        <a href="<?php the_permalink() ?>" rel="bookmark" class="section-card--article col-lg-4 col-sm-12"
                           style="background: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover; cover; background-position: center; border-radius: 0 4px 4px 0"></a>
                    </article>
                    <?php
                    $i++;
                endif;
            endwhile; ?>

        <aside class="site__sidebar">
            <ul>
                <?php dynamic_sidebar( 'blog-sidebar' ); ?>
            </ul>
        </aside>
    </div>
</div>
<?php get_footer(); ?>