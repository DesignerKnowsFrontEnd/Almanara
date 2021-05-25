<?php
/**
 * Template Name: Amenities-Single
 *
 */
$social = get_field('social_icons', 'options');
$page = get_field('page_section');
$other = get_field('other_section');


global $post;
get_header();
?>



<?php get_template_part( 'template-parts/breadcrumbs'); ?>



<section class="villas">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <img src="<?php echo esc_url($page['image_1']['url']); ?>"
                    alt="<?php echo esc_attr($page['image_1']['alt']); ?>" class="img-fluid mobile-spacing">
            </div>
            <div class="col-sm-12 col-lg-6 d-flex flex-column justify-content-center align-items-start pl-50">
                <h2><?php echo $page['title_1']; ?></h2>
                <div class='title-divider'></div>
                <p class="mx-width-490"><?php echo $page['paragraph_1']; ?></p>
            </div>
        </div>
    </div>
</section>

<section class="villas section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <img src="<?php echo esc_url($page['image_2']['url']); ?>"
                    alt="<?php echo esc_attr($page['image_2']['alt']); ?>" class="img-fluid mobile-spacing">
            </div>
            <div class="col-sm-12 col-lg-6 d-flex flex-column justify-content-center align-items-start pl-50">
                <h2><?php echo $page['title_2']; ?></h2>
                <div class='title-divider'></div>
                <p class="mx-width-490"><?php echo $page['paragraph_2']; ?></p>
            </div>
        </div>
    </div>
</section>

<section class="villas">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <img src="<?php echo esc_url($page['image_3']['url']); ?>"
                    alt="<?php echo esc_attr($page['image_3']['alt']); ?>" class="img-fluid mobile-spacing">
            </div>
            <div class="col-sm-12 col-lg-6 d-flex flex-column justify-content-center align-items-start pl-50">
                <h2><?php echo $page['title_3']; ?></h2>
                <div class='title-divider'></div>
                <p class="mx-width-490"><?php echo $page['paragraph_3']; ?></p>
            </div>
        </div>
    </div>
</section>

<section class="villas section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <img src="<?php echo esc_url($page['image_4']['url']); ?>"
                    alt="<?php echo esc_attr($page['image_4']['alt']); ?>" class="img-fluid mobile-spacing">
            </div>
            <div class="col-sm-12 col-lg-6 d-flex flex-column justify-content-center align-items-start pl-50">
                <h2><?php echo $page['title_4']; ?></h2>
                <div class='title-divider'></div>
                <p class="mx-width-490"><?php echo $page['paragraph_4']; ?></p>
            </div>
        </div>
    </div>
</section>






<?php get_footer(); ?>