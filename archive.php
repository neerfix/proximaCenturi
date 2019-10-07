<?php get_header(); ?>
    <div class="container text-center mb-5">
        <h1 class="site__heading text-white">Le blog</h1>
        <?php
        $args = array('post_type' => 'post',
            'posts_per_page' => '10');
        $recentPosts = new WP_Query($args);
        $i = 0;
        ?>
        <div class="container mb-5">
            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post();

                if ( has_post_format( 'link' )) : ?>
                    <article class="row mt-4 blog-article">
                        <div class="col-12 bg-lightgrey p-4 br4">
                            <h3 style="color: #333333"><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                            <i>Publié le <?php the_date('d M Y'); ?></i>
                            <?php the_category(); ?>
                            <?php the_tags('<div class="mestags">', '&nbsp;', '</div>'); ?>
                        </div>
                    </article>
                <?php endif;
                if ( has_post_format( 'chat' )) {
                    if ($i % 2): ?>
                        <article class="row mt-4 blog-article left">
                            <a href="<?php the_permalink() ?>" rel="bookmark" class="section-card--article col-lg-4 col-sm-12"
                               style="background: url('<?= the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center; border-radius: 4px 0 0 4px"></a>
                            <div class="col-lg-8 col-sm-12 bg-lightgrey p-4 br4">
                                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_excerpt(); ?></p>
                                <i>Publié le <?php the_date('d M Y'); ?></i>
                                <?php the_category(); ?>
                                <?php the_tags('<div class="mestags">', '&nbsp;', '</div>'); ?>
                            </div>
                        </article>
                        <?php
                        $i++;
                    else: ?>
                        <article rel="bookmark" class="row mt-4 blog-article right">
                            <div class="col-lg-8 col-sm-12 bg-lightgrey p-4 bl4">
                                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_excerpt(); ?></p>
                                <i>Publié le <?php the_date('d M Y'); ?></i>
                                <?php the_category(); ?>
                                <?php the_tags('<div class="mestags">', '&nbsp;', '</div>'); ?>
                            </div>
                            <a href="<?php the_permalink() ?>" rel="bookmark" class="section-card--article col-lg-4 col-sm-12"
                               style="background: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover; cover; background-position: center; border-radius: 0 4px 4px 0"></a>
                        </article>
                        <?php
                        $i++;
                    endif;
                }
            endwhile;
            wp_reset_postdata();?>
        </div>
    </div>
<?php get_footer(); ?>