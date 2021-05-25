<?php
/**
 * Template Name: Book Your Stay
 *
 */

$social = get_field('social_icons', 'options');
$contact = get_field('contact_info', 'options');

global $post;
get_header();
?>



<?php get_template_part( 'template-parts/breadcrumbs'); ?>


<section class="main-form section-bottom-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 d-flex align-items-center">
                <div id="book-now-form">
                    <?php echo do_shortcode('[contact-form-7 id="450" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>






<?php get_footer(); ?>