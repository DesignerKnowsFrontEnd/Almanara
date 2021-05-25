<?php
/**
 * Template Name: Accomodation Single
 *
 */
$social = get_field('social_icons', 'options');
$slider = get_field('slider_section');
$page = get_field('page_section');
$other = get_field('other_section');
$gallery = get_field('gallery_group');
$modal = get_field('modal_section');

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
                $sliderText = get_sub_field('slider_text');
          ?>
            <div class="swiper-slide overlay">
                <h2 class='slider-text'><?php echo $sliderText; ?></h2>
                <img src="<?php echo esc_url($sliderImage['url']);  ?>"
                    alt="<?php echo esc_attr($sliderImage['alt']);  ?>" class="mobile-img">
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







<section id='cleanUp' class="villas pos-r section-top-spacing">
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
                <a href="<?php echo esc_url($modal['modal_button']['url']); ?>" data-toggle="modal" data-target="#exampleModalCenter1" class='btn btn-text mt-25'><?php echo $modal['modal_button']['title']; ?></a>
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
                <a href="<?php echo esc_url($modal['modal_button_2']['url']); ?>" data-toggle="modal" data-target="#exampleModalCenter2" class='btn btn-text mt-25'><?php echo $modal['modal_button_2']['title']; ?></a>
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


<section class="other-amenities section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2><?php echo $other['main_title']; ?></h2>
                <div class='title-divider'></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="icon-wrapper">
                    <div class="icon">
                        <?php echo $other['icon_1']; ?>
                    </div>
                    <h5><?php echo $other['icon_title_1']; ?></h5>
                </div>
                <p><?php echo $other['icon_paragraph_1']; ?></p>
            </div>
            <div class="col-lg-6">
                <div class="icon-wrapper">
                    <div class="icon">
                        <?php echo $other['icon_2']; ?>
                    </div>
                    <h5><?php echo $other['icon_title_2']; ?></h5>
                </div>
                <p><?php echo $other['icon_paragraph_2']; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="icon-wrapper">
                    <div class="icon">
                        <?php echo $other['icon_3']; ?>
                    </div>
                    <h5><?php echo $other['icon_title_3']; ?></h5>
                </div>
                <p><?php echo $other['icon_paragraph_3']; ?></p>
            </div>
            <div class="col-lg-6">
                <div class="icon-wrapper">
                    <div class="icon">
                        <?php echo $other['icon_4']; ?>
                    </div>
                    <h5><?php echo $other['icon_title_4']; ?></h5>
                </div>
                <p><?php echo $other['icon_paragraph_4']; ?></p>
            </div>
        </div>
    </div>
</section>




<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">
            <h2><?php echo $modal['modal_title']; ?></h2>
            <div class='title-divider'></div>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">Close &times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 d-flex flex-column justify-content-center align-items-start">
                        <?php echo $modal['modal_content']; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">
            <h2><?php echo $modal['modal_title_2']; ?></h2>
            <div class='title-divider'></div>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">Close &times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 d-flex flex-column justify-content-center align-items-start">
                        <?php echo $modal['modal_content_2']; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
  </div>
</div>










<?php get_footer(); ?>