<?php
/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonial';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.
$text = get_field('testimonial') ?: 'Your testimonial here...';
$author = get_field('showposts-number') ?: 'Author name';
$role = get_field('role') ?: 'Author role';
$image = get_field('image') ?: 295;
$background_color = get_field('background_color');
$text_color = get_field('text_color');

?>

<!--Markup for Testimonial-->
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <blockquote class="testimonial-blockquote">
        <span class="testimonial-text"><?php echo $text; ?></span>
        <div class="testimonial-arrow"></div>
    </blockquote>
    <div class="testimonial-image">
        <?php echo wp_get_attachment_image( $image, 'full' ); ?>
    </div>
    <div class="testimonial-author"><h5><?php echo $author; ?><span class="testimonial-role"><cite><?php echo $role; ?></cite></span></h5></div>

    <!--Inline style for Testimonial Block-->
    <style type="text/css">
        #<?php echo $id; ?> {
            background: <?php echo $background_color; ?>;
            color: <?php echo $text_color; ?>;
        }

        #<?php echo $id; ?> .testimonial-arrow {
            border-top: 25px solid<?php echo $background_color; ?>;
            color: <?php echo $text_color; ?>;
        }

        #<?php echo $id; ?> .testimonial-author {
                                background-color: <?php echo $background_color; ?>;
                                color: <?php echo $text_color; ?>;
                            }
    </style>
</div>