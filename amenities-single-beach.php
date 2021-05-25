<?php
/**
 * Template Name: Amenities - Single - Beach
 *
 */

$social = get_field('social_icons', 'options');
$page = get_field('page_section');
$amen = get_field('amenities_section');
global $post;
get_header();
?>







<?php get_template_part( 'template-parts/breadcrumbs'); ?>


<section class="villas section-top-spacing">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                <h2><?php echo $page['title']; ?></h2>
                <div class='title-divider'></div>
                <p class="mx-width-490"><?php echo $page['paragraph']; ?></p>
            </div>
            <div class="col-sm-12 col-lg-6">
                <img src="<?php echo esc_url($page['image_1']['url']);  ?>" alt="<?php echo esc_attr($page['image_1']['alt']); ?>" class=" img-fluid">
            </div>
        </div>
       
    </div>
</section>

<section class="ammenities section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 d-flex flex-column justify-content-center align-items-start">
                <h2><?php echo $amen['title']; ?></h2>
                <div class='title-divider'></div>
                <p class='mx-width-310'><?php echo $amen['paragraph_1']; ?></p>
                <a href="<?php echo esc_url($amen['button']['url']); ?>"
                    class='btn btn-primary mt-25'><?php echo $amen['button']['title']; ?></a>
            </div>
            <div class="col-lg-8">
                <!-- Swiper -->
                <div id='SliderHome' class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php if(have_rows('amenities_section')):?>
                        <?php while( have_rows('amenities_section')): the_row();  ?>
                        <?php if( have_rows('slider_image_group') ): ?>
                        <?php while( have_rows('slider_image_group') ): the_row(); 
                                        $image = get_sub_field('slider_image');
                                    ?>
                        <div class="swiper-slide slide-240">
                            <img src="<?php echo esc_url($image['url']); ?>" class="d-block w-100 mobile-spacing"
                                alt="<?php echo esc_attr($image['alt']); ?>">
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>





<?php get_footer(); ?>



