<?php
/**
 * Template Name: About Us
 *
 */

$social = get_field('social_icons', 'options');
$page = get_field('page_section');

global $post;
get_header();
?>



<?php get_template_part( 'template-parts/breadcrumbs'); ?>


<section class="our-story">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2><?php echo $page['title_1']; ?></h2>
                <div class='title-divider'></div>
                <p><?php echo $page['paragraph_1']; ?></p>
            </div>
        </div>
    </div>
</section>

<section class="gemma-leo section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="<?php echo esc_url($page['image_1']['url']); ?>" alt="<?php echo esc_attr($page['image_1']['alt']); ?>" class='mobile-spacing'>
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start">
                <h2><?php echo $page['title_2']; ?></h2>
                <div class='title-divider'></div>
                <p><?php echo $page['paragraph_2']; ?></p>
            </div>
        </div>
    </div>
</section>

<section class="cathy section-bottom-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start">
                <h2><?php echo $page['title_3']; ?></h2>
                <div class='title-divider'></div>
                <p><?php echo $page['paragraph_3']; ?></p>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo esc_url($page['image_2']['url']); ?>" alt="<?php echo esc_attr($page['image_2']['alt']); ?>">
            </div>
        </div>
    </div>
</section>






<?php get_footer(); ?>