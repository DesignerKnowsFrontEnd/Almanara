<?php
/**
 * Template Name: Restaurant-Menu
 *
 */

$social = get_field('social_icons', 'options');
$nav = get_field('navigation_links');

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


<section class="menu section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-4 mobile-spacing">
            <?php 
                    $args = array(
                        'post_type' => 'menu',
                        'post_status' => 'publish',
                        'numberposts' => -1,
                        'order'    => 'ASC',
                        'orderby'  => 'menu_order',
                    );     
                      $loop = new WP_Query( $args );             
                      $i = 0;
                      
                ?>
                <div class="list-group" id="list-tab" role="tablist">
                    <?php  while ( $loop->have_posts() ) : $loop->the_post(); $i++; ?>
                    <a class="list-group-item list-group-item-action <?php if ($i == 1) { echo 'active'; } ?>" id="list-<?php echo get_the_ID(); ?>" data-toggle="list"
                        href="#list-item-<?php echo get_the_ID(); ?>" role="tab" aria-controls="<?php echo get_the_ID(); ?>"><?php echo the_title(); ?> </a>
                    <?php endwhile;
                    wp_reset_postdata();
                 ?>
                </div>
            </div>
            <div class="col-sm-12 col-lg-8">
                <div class="tab-content" id="nav-tabContent">
                <?php  
                    $c = 0;
                    while ( $loop->have_posts() ) : $loop->the_post(); $c++; ?>
                    <div class="tab-pane fade show <?php if ($c == 1) { echo 'active'; } ?>" id="list-item-<?php echo get_the_ID(); ?>" role="tabpanel"
                        aria-labelledby="list-<?php echo get_the_ID(); ?>">
                        <h2><?php echo the_title(); ?></h2>
                        <div class='title-divider'></div>
                        <p>
                            Chef Anthony prepares new specials each week using only the freshest ingredients which are
                            locally sourced. <b><em>For Reservations please call 0717 073 953. Open from 11-21:00. Closed Tuesdays.</em></b></p>

                        <div class="menu-grid">
                        <?php 
                            if(have_rows('food_category')):
                            while( have_rows('food_category')): the_row();                 
                        ?>
                            <div class="card">
                                <div class="card-body-2">
                                    <h5 class="card-title"><?php the_sub_field('food_item_title'); ?> <span
                                            class="badge badge-primary"><?php  the_sub_field('food_item_price'); ?> /-</span></h5>
                                    <p class="card-text"><?php  the_sub_field('food_item_description'); ?></p>
                                </div>
                            </div>
                            <?php 
                        endwhile;
                    wp_reset_postdata();
                endif; ?>   
                        </div>
                    </div>
                    <?php endwhile;
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>