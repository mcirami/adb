<?php
/**
 * The template for displaying the footer.
 *
 * @package boiler
 */
?>
	
		<footer id="global_footer" class="site_footer full_width">
			<div class="my_container">
                <div class="left_column">
                    <div class="two_column_wrap full_width">
                        <div class="column footer_menu">
                            <div class="column_content">
                                <h3><?php the_field('column_one_heading', 'options');?></h3>
                                <nav role="navigation">
                                    <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'menu_class' => 'footer_menu' ) ); // remember to assign a menu in the admin to remove the container div ?>
                                </nav>
                            </div>
                        </div>
                        <div class="column address">
                            <div class="column_content">
                                <h3><?php the_field('column_two_heading', 'options');?></h3>
                                <ul>
                                    <?php if (have_rows('company_address', 'options')) : ?>
                                        <?php while (have_rows('company_address', 'options')) : the_row();
                                                $address = get_sub_field('address', 'options');
                                        ?>
                                            <li class="address"><p><?php echo $address['street'] . ", " . $address['city_state_zip']; ?></p></li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                    <li class="email" ><a href="mailto:<?php the_field('company_email', 'options'); ?>"><?php the_field('company_email', 'options'); ?></a></li>

                                    <?php if (have_rows('company_phone_number', 'options')) : $totalCount = count(get_field('company_phone_number', 'options')); $count = 1;?>
                                        <li class="phone">
                                            <?php while (have_rows('company_phone_number', 'options')) : the_row(); ?>
                                                <a class="float-left" href="tel:<?php the_sub_field('phone_number', 'options'); ?>"><?php the_sub_field('phone_number', 'options'); ?></a>
                                                <?php if ($totalCount > 1 && $count == 1) { ?><span class="float-left">, </span> <?php } $count++;?>
                                            <?php endwhile; ?>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div><!-- two_column_wrap -->
                    <div class="copy full_width d-none d-md-block">
                        <p>&copy; 2017 American Design Builders Inc.</p>
                    </div>
                </div><!-- left_column -->
                <div class="right_column">
                    <h3><?php the_field('column_three_heading', 'options');?></h3>
                    <div class="map">
                        <a href="/contact-us"><img src="<?php echo bloginfo('template_url'); ?>/images/map-screenshot.jpg"/></a>
                    </div>
                    <div class="copy full_width d-block d-md-none">
                        <p>&copy; 2017 American Design Builders Inc.</p>
                    </div>
                </div>




			</div><!-- .container -->
		</footer>
	</div><!-- wrapper -->
		<?php wp_footer(); ?>

	</body>
</html>