<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/*
 * Remove styles and scripts from parent theme
 */
function remove_styles() {
    wp_dequeue_script('jquery');
    wp_dequeue_script('jquery-js');
}
add_action( 'wp_print_scripts', 'remove_styles', 10 );

/*
 * Add javascript and css
 */
function add_theme_scripts()
{
    /*Javascript*/
    wp_deregister_script( 'jquery-core' );
    wp_enqueue_script( 'jquery-core', "https://code.jquery.com/jquery-3.4.1.min.js", '', '3.4.1', true);
    wp_deregister_script( 'jquery-migrate' );
    // wp_enqueue_script( 'jquery-migrate', "https://code.jquery.com/jquery-migrate-3.1.0.min.js", '', '3.1.0', true );
    wp_enqueue_script('popper-js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery-core'), '1.16.1', true);
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery-core'), '4.5.2', true);
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.js',  '6.2.0', true);
    wp_enqueue_script('swiper-min-js', 'https://unpkg.com/swiper/swiper-bundle.min.js',  '6.2.0', true);
    wp_enqueue_script('bootstrap-lightbox-js', 'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js',  array('jquery-core'), '5.3.0', true);
    wp_enqueue_script('country-select-js',  STYLESHEET_PATH . '/assets/vendors/country-picker-flags/build/js/countrySelect.min.js', array('jquery-core'), '2.0.1', true);
    wp_enqueue_script('datepicker-js',  STYLESHEET_PATH . '/assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js', array('jquery-core'), '1.9.0', true);
    wp_enqueue_script('main-js', STYLESHEET_PATH . '/assets/js/app.js', '', '1.0.0', true);
    wp_enqueue_script('google-maps-js',  'https://maps.googleapis.com/maps/api/js?key=AIzaSyAWX0cmxdZuhInF0tqhUpD0Z28Oa6yuOjY&callback=initMap', array(), false, true);

    /* CSS */
    
    
    wp_enqueue_style('main-styles', STYLESHEET_PATH .'/assets/css/styles.css', '1.0.0');
    wp_enqueue_style('swiper-styles',  'https://unpkg.com/swiper/swiper-bundle.css', '6.2.0');
    wp_enqueue_style('swiper-styles-min',  'https://unpkg.com/swiper/swiper-bundle.min.css', '6.2.0');
    wp_enqueue_style('bootstrap-lightbox-min',  'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css', '5.3.0');
    wp_enqueue_style('country-select-styles',  STYLESHEET_PATH . '/assets/vendors/country-picker-flags/build/css/countrySelect.min.css', '2.0.1');
    wp_enqueue_style('datepicker-styles',  STYLESHEET_PATH . '/assets/vendors/bootstrap-datepicker/css/bootstrap-datepicker.standalone.min.css', '1.9.0');
   
    

}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );