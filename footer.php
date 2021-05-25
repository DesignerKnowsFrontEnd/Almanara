<?php 
 $global = get_field('global_options', 'options');
$social = get_field('social_icons', 'options'); 
$contact = get_field('contact_info', 'options');
$footer = get_field('footer_info', 'options');
?>


<footer class='footer'>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-3">
                <div class="column-1">
                    <a class="navbar-brand" href="/">
                        <img src="<?php echo $global['site_logo']['url']; ?>" alt="<?php echo $global['site_logo']['alt']; ?>" class="logo">
                    </a>
                    <p class='footer-text mt-3'><?php echo $footer['paragraph']; ?></p>
                    <p class='footer-text'>Follow Us</p>
                    <div class="social-icons">
                        <a href="<?php echo $social['facebook_link']; ?>"><?php echo $social['facebook_icon']; ?></a>
                        <a href="<?php echo $social['instagram_link']; ?>"><?php echo $social['instagram_icon']; ?></a>
                        <a href="<?php echo $social['twitter_link']; ?>"><?php echo $social['twitter_icon']; ?></a>
                        <a href="<?php echo $social['tripadvisor_link']; ?>"><?php echo $social['tripadvisor_icon']; ?></a>
                    </div>
                </div>
            </div> 
            <div class="col-sm-12 col-lg-3">
                <div class="column-1">
                    <h5 class='footer-title'>For Customers</h5>
                    <?php wp_nav_menu(
                                array(
                                    'menu'            =>    'Footer Menu', 
                                    'container'       =>    'ul', 
                                    'container_class' =>    '', 
                                    'container_id'    =>    '', 
                                    'menu_class'      =>    'footer-links', 
                                    'depth'           =>    1, 
                                    'add_li_class'    =>    'footer-link'
                                )
                            );
                        ?>

                </div>
            </div>
            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <div class="col-sm-12 col-lg-3">
                <h5 class='footer-title'>Some Reviews</h5>
                <div class="footer-news">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
            </div>
            <?php endif; ?>
            <div class="col-sm-12 col-lg-3">
                <div class="column-1">
                    <h5 class='footer-title'>Contact Us</h5>
                    <div class="contact-info column">
                        <p class='footer-text'>Almanara Luxury Resort P.O. BOX 5468 Diani Beach, 80401, Kwale District,
                            Kenya</p>
                        <a href="#"><?php echo $contact['email_icon']; ?>
                            <?php echo $contact['email_label']; ?></a>
                        <a href="#"><?php echo $contact['phone_icon']; ?>
                            <?php echo $contact['phone_label']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyinfo">
    <div class="container">
        <div class="copyinfo-inner">
            <p class="copy-text"><?php echo $footer['copy_info_text']; ?></p>
        </div>
    </div>
</div>



<?php wp_footer(); ?>







</body>

</html>