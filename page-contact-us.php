<?php
/**
 * Template Name: Contact
 *
 * The template for displaying home page.
 *
 *
 * @package boiler
 */

get_header(); ?>


    <div class="contact_page full_width">
        <div class="my_container">
            <div class="page_title full_width text-left">
                <h3 class="animated fadeInDown wow"><?php the_field('page_title'); ?></h3>
            </div>

            <div class="description full_width">
                <p class="animated fadeInUp wow"><?php the_field('page_description'); ?></p>
            </div>

            <div class="map_section full_width">
                <!--<img src="<?php /*echo bloginfo('template_url'); */?>/images/map-placeholder-page.jpg"/>-->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199580.06790895175!2d-90.2692791563415!3d38.592774923333465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d8af581dcf0999%3A0xfc6433ab9ae2637f!2s3803+Mine+Haul+Rd%2C+Millstadt%2C+IL+62260!5e0!3m2!1sen!2sus!4v1518373323034" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="three_column_section full_width text-center">
                <div class="column address d-inline-block">
                    <div class="image_wrap d-inline-block animated fadeInLeft wow">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/icon-location.png"/>
                    </div>
                    <div class="text_wrap text-left text-sm-center text-md-left d-inline-block">
                        <h4 class="animated fadeInRight wow">Address</h4>
                        <?php if (have_rows('company_address', 'options')) : ?>
                            <?php while (have_rows('company_address', 'options')) : the_row();
                                    $address = get_sub_field('address', 'options'); ?>
                                    <p class="animated fadeInRight wow"><?php echo $address['street']; ?></p>
                                    <p class="animated fadeInRight wow"><?php echo $address['city_state_zip']; ?></p>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div><!-- column -->
                <div class="column email d-inline-block">
                    <div class="image_wrap d-inline-block animated fadeInLeft wow"">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/icon-airplane.png"/>
                    </div>
                    <div class="text_wrap text-left text-sm-center text-md-left d-inline-block">
                        <h4 class="animated fadeInRight wow">E-mail Address</h4>
                        <p class="animated fadeInRight wow"><a href="mailto:<?php the_field('company_email', 'options'); ?>"><?php the_field('company_email', 'options'); ?></a></p>
                    </div>
                </div><!-- column -->
                <div class="column phone d-inline-block">
                    <div class="image_wrap d-inline-block animated fadeInLeft wow"">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/icon-phone-circle.png"/>
                    </div>
                    <div class="text_wrap text-left text-sm-center text-md-left d-inline-block">
                        <h4 class="animated fadeInRight wow">Phone</h4>
                        <?php if (have_rows('company_phone_number', 'options')) : ?>
                            <?php while (have_rows('company_phone_number', 'options')) : the_row(); ?>
                                <p class="animated fadeInRight wow"><a href="tel:<?php the_sub_field('phone_number', 'options'); ?>"><?php the_sub_field('phone_number', 'options'); ?></a></p>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div><!-- column -->
            </div>
        </div><!-- my_container -->
    </div><!-- contact_page -->


<?php get_footer(); ?>