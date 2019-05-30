<?php
/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$recentPosts = new WP_Query();
$nb_posts = get_field('showposts-number') ?: 'Author name';
$recentPosts->query('showposts='.$nb_posts);
$i = 0;
?>
<div class="container mb-5">
    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post();
    if($i % 2): ?>
        <article href="<?php the_permalink() ?>" rel="bookmark" class="row mt-4">
            <a href="<?php the_permalink() ?>" rel="bookmark" class="section-card--article col-lg-4 col-sm-12"
                 style="background: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover; cover; background-position: center"></a>
            <div class="col-lg-8 col-sm-12 bg-lightgrey p-4">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
            </div>
        </article>
    <?php
        $i++;
    else: ?>
        <article href="<?php the_permalink() ?>" rel="bookmark" class="row mt-4">
            <div class="col-lg-8 col-sm-12 bg-lightgrey p-4">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
            </div>
            <a href="<?php the_permalink() ?>" rel="bookmark" class="section-card--article col-lg-4 col-sm-12"
                 style="background: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover; cover; background-position: center"></a>
        </article>
    <?php
        $i++;
    endif;
    endwhile; ?>
</div>
