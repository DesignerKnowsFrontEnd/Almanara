<?php
/**
 * Template Name: Contact Us
 *
 */

$social = get_field('social_icons', 'options');
$contact = get_field('contact_info', 'options');
$info = get_field('contact_info_section');

global $post;
get_header();
?>



<?php get_template_part( 'template-parts/breadcrumbs'); ?>


<section class="contact-information">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h3><?php echo $info['main_title_1']; ?></h3>
            </div>
            <div class="col-lg-4">
                <h3><?php echo $info['main_title_2']; ?></h3>
            </div>
        </div>
        <div class="row mt-30">
            <div class="col-lg-4">
                <div class="contact-information-header">
                    <h6><?php echo $info['subtitle_1']; ?></h6>
                </div>
                <div class="table-1">
                    <div class="contact-information-details">
                        <h5><?php echo $info['contact_title_1']; ?></h5>
                        <div class="contact-info-2">
                            <a href="#"><?php echo $info['contact_info_icon_1']; ?>
                                <?php echo $info['contact_info_number_1']; ?></a>
                        </div>
                    </div>
                    <div class="contact-information-details">
                        <h5><?php echo $info['contact_title_2']; ?></h5>
                        <div class="contact-info-2">
                            <a href="#"><?php echo $info['contact_info_icon_2']; ?>
                                <?php echo $info['contact_info_email_2']; ?></a>
                        </div>
                    </div>
                    <div class="contact-information-details">
                        <h5><?php echo $info['contact_title_3']; ?></h5>
                        <div class="contact-info-2">
                            <a href="#"><?php echo $info['contact_info_icon_3']; ?>
                                <?php echo $info['contact_info_number_3']; ?></a>
                        </div>
                    </div>
                    <div class="contact-information-details">
                        <h5><?php echo $info['contact_title_4']; ?></h5>
                        <div class="contact-info-2">
                            <a href="#"><?php echo $info['contact_info_icon_4']; ?>
                                <?php echo $info['contact_info_email_4']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mobile-spacing">
                <div class="contact-information-header-2">
                    <h6><?php echo $info['subtitle_2']; ?></h6>
                </div>
                <div class="table-2">
                    <div class="contact-information-details">
                        <div class="contact-info-2">
                            <p><?php echo $info['availability_date_1']; ?></p>
                        </div>
                    </div>
                    <div class="contact-information-details">
                        <div class="contact-info-2">
                            <p><?php echo $info['availability_date_2']; ?></p>
                        </div>
                    </div>
                    <div class="contact-information-details">
                        <div class="contact-info-2">
                            <p><?php echo $info['availability_date_3']; ?></p>
                        </div>
                    </div>
                    <div class="contact-information-details">
                        <div class="contact-info-2">
                            <p><?php echo $info['availability_date_4']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mobile-spacing">
                <div class="table-3">
                    <div class="contact-information-details-2">
                        <p><?php echo $contact['address']; ?></p>
                        <div class="contact-info-2">
                            <a href="#"><?php echo $contact['email_icon']; ?>
                                <?php echo $contact['email_label']; ?></a>
                        </div>
                        <div class="contact-info-2">
                            <a href="#"><?php echo $contact['phone_icon']; ?>
                                <?php echo $contact['phone_label']; ?></a>
                        </div>
                        <h3>Our Social Media</h3>
                        <div class="social-icons">
                            <a
                                href="<?php echo $social['facebook_link']; ?>"><?php echo $social['facebook_icon']; ?></a>
                            <a
                                href="<?php echo $social['instagram_link']; ?>"><?php echo $social['instagram_icon']; ?></a>
                            <a href="<?php echo $social['twitter_link']; ?>"><?php echo $social['twitter_icon']; ?></a>
                            <a
                                href="<?php echo $social['tripadvisor_link']; ?>"><?php echo $social['tripadvisor_icon']; ?></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="g-maps section-top-spacing">
    <div class="mapouter">
        <div class="gmap_canvas"><iframe id="gmap_canvas"
                src="https://maps.google.com/maps?q=Almanara%20Luxury%20Resort%20P.O.%20BOX%205468%20Diani%20Beach,%2080401,%20Kwale%20District,%20Kenya&t=&z=17&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>

    </div>
</section>






<?php get_footer(); ?>