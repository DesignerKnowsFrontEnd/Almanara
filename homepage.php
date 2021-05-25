<?php
/**
 * Template Name: Homepage
 *
 */

$hero = get_field('hero_section');
$intro = get_field('intro_section');
$exec = get_field('executive_villa_section');
$bella = get_field('boutique_hotel_section');
$amen = get_field('amenities_section');
$sails = get_field('sails_beach_bar_&_restaurant_section');
$gallery = get_field('gallery_group');

global $post;
get_header();
?>

<div class="slider-main">
    <!-- Swiper -->
    <div id='sliderMain' class="swiper-container">
        <div class="swiper-wrapper">
            <?php if( have_rows('hero_slider_section')) : ?>
            <?php while( have_rows('hero_slider_section')): the_row(); 
                $sliderImage = get_sub_field('slider_image');  
          ?>
            <div class="swiper-slide overlay">
                <img src="<?php echo esc_url($sliderImage['url']);  ?>" alt="<?php echo esc_attr($sliderImage['alt']);  ?>" class='mobile-img'/>
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



<section class="intro section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6   d-flex flex-column justify-content-center align-items-start">
                <h2><?php echo $intro['title']; ?></h2>
                <div class='title-divider'></div>
                <p><?php echo $intro['paragraph_1']; ?></p>
                <p><?php echo $intro['paragraph_2']; ?></p>
                <a href="<?php echo esc_url($intro['button']['url']); ?>"
                    class='btn btn-primary mt-25'><?php echo $intro['button']['title']; ?></a>
            </div>
            <div class="col-sm-12 col-lg-6">
                <img src="<?php echo esc_url($intro['image']['url']); ?>"
                    alt="<?php echo esc_attr($intro['image']['alt']); ?>" class="border img-fluid mobile-spacing">
            </div>
        </div>
    </div>
</section>

<section class="villas">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                <h2><?php echo $exec['title']; ?></h2>
                <div class='title-divider'></div>
                <p class="mx-width-490">
                    <?php echo $exec['paragraph_1']; ?></p>

                <a href="<?php echo esc_url($exec['button']['url']); ?>"
                    class='btn btn-primary mt-25'><?php echo $exec['button']['title']; ?></a>
            </div>
            <div class="col-sm-12 col-lg-6">
                <img src="<?php echo esc_url($exec['image']['url']); ?>"
                    alt="<?php echo esc_attr($exec['image']['alt']); ?>" class="border img-fluid mobile-spacing">
            </div>
        </div>
        <div class="row section-top-spacing">
            <div class="col-sm-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                <h2><?php echo $bella['title']; ?></h2>
                <div class='title-divider'></div>
                <p class="mx-width-490"><?php echo $bella['paragraph_1']; ?></p>

                <a href="<?php echo esc_url($bella['button']['url']); ?>"
                    class='btn btn-primary mt-25'><?php echo $bella['button']['title']; ?></a>
            </div>
            <div class="col-sm-12 col-lg-6">
                <img src="<?php echo esc_url($bella['image']['url']); ?>"
                    alt="<?php echo esc_attr($bella['image']['alt']); ?>" class="border img-fluid mobile-spacing">
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

<section class="sails section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 ">
                <img src="<?php echo esc_url($sails['image']['url']); ?>"
                    alt="<?php echo esc_attr($sails['image']['alt']); ?>" class="b img-fluid mobile-spacing">
            </div>
            <div class="col-sm-12 col-lg-5 ml-50 d-flex flex-column justify-content-center align-items-start">
                <h2><?php echo $sails['title']; ?></h2>
                <div class='title-divider'></div>
                <p><?php echo $sails['paragraph_1']; ?></p>
                <img src="<?php echo esc_url($sails['menu_image']['url']); ?>"
                    alt="<?php echo esc_attr($sails['menu_image']['alt']); ?>" class="img-fluid">
                <a href="<?php echo esc_url($sails['button']['url']); ?>"
                    class='btn btn-text mt-25'><?php echo $sails['button']['title']; ?>
                </a>
            </div>
        </div>
    </div>
</section>





<?php get_footer(); ?>