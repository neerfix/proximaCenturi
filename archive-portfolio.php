<?php get_header(); ?>
<div class="container text-center mb-5">
    <h1 class="site__heading text-white">Mes réalisations</h1>
    <?php
        $args = array('post_type' => 'portfolio',
                    'posts_per_page' => '10');
        $recentPosts = new WP_Query($args);
        ?>
        <div class="container mb-5">
            <div class="card-columns">
            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                  <a href="<?php the_permalink(); ?>" class="card">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php the_title(); ?></h5>
                      <p class="card-text"><?php the_excerpt(); ?></p>
                      <p class="card-text"><small class="text-muted">Publié le le <?php the_date(); ?></small></p>
                    </div>
                  </a>
            <?php endwhile;
            wp_reset_postdata();?>
        </div>
    </div>
</div>
<?php get_footer(); ?>