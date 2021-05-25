<?php
/**
 * Template Name: Restaurant
 *
 */

$social = get_field('social_icons', 'options');
$page = get_field('page_section');
$float = get_field('floating_button');

global $post;
get_header();
?>


<div class="slider-main">
    <!-- Swiper -->
    <div id='sliderMain' class="swiper-container">
        <div class="swiper-wrapper">
            <?php if( have_rows('slider_section')) : ?>
            <?php while( have_rows('slider_section')): the_row(); 
                $sliderImage = get_sub_field('slider_image');
          ?>
            <div class="swiper-slide overlay">
                <img src="<?php echo esc_url($sliderImage['url']);  ?>" alt="<?php echo esc_attr($sliderImage['alt']);  ?>" class='mobile-img'>   
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<section class="villas section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                <h2><?php echo $page['title_1']; ?></h2>
                <div class='title-divider'></div>
                <p class="mx-width-490"><?php echo $page['paragraph_1']; ?></p>
            </div>
            <div class="col-sm-12 col-lg-6">
                <img src="<?php echo esc_url($page['image_1']['url']);  ?>"
                    alt="<?php echo esc_attr($page['image_1']['alt']); ?>" class=" img-fluid">
            </div>
        </div>

    </div>
</section>

<section class="our-view">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <img src="<?php echo esc_url($page['image_2']['url']);  ?>"
                    alt="<?php echo esc_attr($page['image_2']['alt']); ?>" class=" img-fluid mobile-spacing">
            </div>
            <div class="col-sm-12 col-lg-6 d-flex flex-column justify-content-center align-items-start pl-50">
                <h2><?php echo $page['title_2']; ?></h2>
                <div class='title-divider'></div>
                <p class="mx-width-490"><?php echo $page['paragraph_2']; ?></p>
                <a href="<?php echo esc_url($page['button']['url']); ?>"
                    class='btn btn-text mt-25'><?php echo $page['button']['title']; ?></a>
            </div>
        </div>
    </div>
</section>




<section class="villas section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                <h2><?php echo $page['title_3']; ?></h2>
                <div class='title-divider'></div>
                <p class="mx-width-490"><?php echo $page['paragraph_3']; ?></p>
            </div>
            <div class="col-sm-12 col-lg-6">
                <img src="<?php echo esc_url($page['image_3']['url']);  ?>"
                    alt="<?php echo esc_attr($page['image_3']['alt']); ?>" class="img-fluid">
            </div>
        </div>

    </div>
</section>

<section class="our-view section-bottom-spacing">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <img src="<?php echo esc_url($page['image_4']['url']);  ?>"
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


<!-- Desktop Floating Button -->
<!-- <div class='d-none d-sm-none d-md-block d-lg-block d-xl-block floating-div'>
    <p class='dark-text'>Chef Anthony prepares new specials each week using only the freshest ingredients which are locally sourced with most of the produce being grown in our 100% organic vegetable shamba “farm”. </p>
    <a href="<?php echo esc_url($page['button']['url']); ?>" class='btn btn-text btn-text-dark'><?php echo $page['button']['title']; ?></a>
</div> -->

<!-- Mobile Floating Button -->
<div class='d-xs-block d-sm-block d-md-none d-lg-none d-xl-none'>
    <a href="<?php echo esc_url($float['url']); ?>" class="btn btn-primary btn-floating"><?php echo $float['title']; ?></a>
</div>








<?php get_footer(); ?>