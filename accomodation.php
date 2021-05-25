<?php
/**
 * Template Name: Accomodation
 *
 */

 $accom = get_field('page_section');
global $post;
get_header();
?>



<?php get_template_part( 'template-parts/breadcrumbs'); ?>





<section class="villas section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                <h2><?php echo $accom['title_1']; ?></h2>
                <div class='title-divider'></div>
                <p class="mx-width-490"><?php echo $accom['paragraph_1']; ?></p>
                <a href="<?php echo esc_url($accom['button_1']['url']); ?>"
                    class='btn btn-primary mt-25'><?php echo $accom['button_1']['title']; ?></a>
            </div>
            <div class="col-sm-12 col-lg-6">
                <img src="<?php echo esc_url($accom['image_1']['url']); ?>"
                    alt="<?php echo esc_attr($accom['image_1']['alt']); ?>" class="border img-fluid mobile-spacing">
            </div>
        </div>
        <div class="row section-top-spacing">
            <div class="col-sm-12 col-lg-6">
                <img src="<?php echo esc_url($accom['image_2']['url']); ?>"
                    alt="<?php echo esc_attr($accom['image_2']['alt']); ?>" class="border img-fluid mobile-spacing">
            </div>
            <div class="col-sm-12 col-lg-6 d-flex flex-column justify-content-center align-items-start pl-50">
                <h2><?php echo $accom['title_2']; ?></h2>
                <div class='title-divider'></div>
                <p class="mx-width-490"><?php echo $accom['paragraph_2']; ?></p>
                <a href="<?php echo esc_url($accom['button_2']['url']); ?>"
                    class='btn btn-primary mt-25'><?php echo $accom['button_2']['title']; ?></a>
            </div>
        </div>
    </div>
</section>






<?php get_footer(); ?>