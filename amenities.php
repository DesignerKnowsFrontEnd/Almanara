<?php
/**
 * Template Name: Amenities
 *
 */

$social = get_field('social_icons', 'options');
$page = get_field('page_section');


global $post;
get_header();
?>



<?php get_template_part( 'template-parts/breadcrumbs'); ?>



<section class="amenities-grid">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="<?php echo esc_url($page['image_1']['url']); ?>" alt="<?php echo esc_attr($page['image_1']['alt']); ?>" class="img-fluid mobile-spacing">
            </div>
            <div class="col-lg-6">
                <img src="<?php echo esc_url($page['image_2']['url']); ?>" alt="<?php echo esc_attr($page['image_2']['alt']); ?>" class="img-fluid">
            </div>
        </div>
        <div class="row mt-30">
            <div class="col-lg-6">
                <img src="<?php echo esc_url($page['image_3']['url']); ?>" alt="<?php echo esc_attr($page['image_3']['alt']); ?>" class="img-fluid mobile-spacing">
            </div>
            <div class="col-lg-6">
                <img src="<?php echo esc_url($page['image_4']['url']); ?>" alt="<?php echo esc_attr($page['image_4']['alt']); ?>" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="image-display m-section-spacing" style="background: url('<?php echo esc_url($page['background_image']['url']); ?>') 0% 100% no-repeat; background-size: cover;"  >
    <div class="container">
        <div class="row h-100">
            <div class="col-lg-5 d-flex">
                <div class="highlighted-box">
                    <p><?php echo $page['highlighted_text']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="other-amenities section-bottom-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2><?php echo $page['title']; ?></h2>
                <div class='title-divider'></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <p><?php echo $page['paragraph']; ?></p>
                <img src="<?php echo esc_url($page['image_5']['url']); ?>" alt="<?php echo esc_attr($page['image_5']['alt']); ?>" class="img-fluid mobile-spacing">
            </div>
            <div class="col-lg-5 offset-lg-1 ml-negative">
                <div class="icon-group-grid">
                <?php if(have_rows('page_section')):?>

                    <?php while( have_rows('page_section')): the_row(); 

                        if( have_rows('icons_group')) : ?>

                            <?php while( have_rows('icons_group')): the_row();  ?>
                                    <div class="icon-wrapper-grid">
                                        <div class="icon-grid">
                                            <?php echo get_sub_field('icon'); ?>
                                        </div>
                                        <h5><?php echo get_sub_field('icon_text'); ?></h5>
                                    </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
                <div class="highlighted-box-2">
                    <p><?php echo $page['highlighted_text_2']; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="underlapping-image">
                <img src="<?php echo esc_url($page['image_6']['url']); ?>" alt="<?php echo esc_attr($page['image_6']['alt']); ?>" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>






<?php get_footer(); ?>