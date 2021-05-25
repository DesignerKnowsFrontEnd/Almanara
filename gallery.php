<?php
/**
 * Template Name: Gallery
 *
 */

$social = get_field('social_icons', 'options');
$gallery = get_field('gallery_group');
global $post;
get_header();
?>



<?php get_template_part( 'template-parts/breadcrumbs'); ?>


<section class="gallery section-bottom-spacing">
    <div class="container">
        <div class="row">

            <?php if(have_rows('gallery_group')):?>

            <?php while( have_rows('gallery_group')): the_row(); 

                  if( have_rows('images')) : ?>

            <?php while( have_rows('images')): the_row(); 
                        $imageThumb = get_sub_field('image_thumb');
                        $imageFull = get_sub_field('image_full_size');
                    ?>
            <div class="col-6 col-sm-4 col-md-3 mt-30">
                <a href="<?php echo esc_url($imageFull['url']); ?>" data-toggle="lightbox" data-gallery="gallery-1">
                    <img src="<?php echo esc_url($imageThumb['url']); ?>" alt="<?php echo esc_attr($imageThumb['alt']); ?>"
                        class="border img-fluid">
                </a>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>






<?php get_footer(); ?>