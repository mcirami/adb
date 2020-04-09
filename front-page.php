<?php
/**
 * Template Name: Home
 *
 * The template for displaying home page.
 *
 *
 * @package boiler
 */

get_header(); ?>

	<div class="home_section full_width">

        <div class="home_hero text-center">
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->

                    <?php if (have_rows('slider_images')) : ?>
                        <?php while (have_rows('slider_images')) : the_row();
                            $image = get_sub_field('slider_image');

                            if (!empty($image)) :
                        ?>
                                <div class="swiper-slide">
                                    <div class="image_wrap">

                                        <img src="<?php echo $image['url']; ?>"/>
                                    </div>
                                </div>
                            <?php endif; ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="text_wrap">
                    <div class="text">
                        <h2 class="animated fadeInDown wow"><?php the_field('image_main_heading'); ?></h2>
                        <h4 class="animated fadeInUp wow"><?php the_field('image_sub_heading'); ?></h4>
                    </div>
                </div>
            </div><!-- swiper-container -->
        </div><!-- home_hero -->

        <div class="three_column_section full_width text-center">
            <div class="my_container">
                <div class="section_heading">
                    <?php $heading = get_field('three_column_section_heading');?>

                    <h2 class="animated fadeInDown wow"><?php echo $heading['green_text']; ?> <span class="d-block d-md-none break"><br/></span><span><?php echo $heading['black_text']; ?></span></h2>
                    <p class="animated fadeInUp wow"><?php the_field('three_column_section_description'); ?></p>
                </div>

                <?php if (have_rows('columns')) : ?>
                    <div class="three_column_wrap full_width">
                        <?php while (have_rows('columns')) : the_row(); ?>
                            <div class="column text-left">
                                <h5 class="animated fadeInDown wow"><?php the_sub_field('column_heading');?></h5>

                                <?php $colImage = get_sub_field('column_image');

                                    if (!empty($colImage)) : ?>

                                        <div class="image_wrap full_width animated fadeIn wow">
                                            <img src="<?php echo $colImage['url']; ?>"/>
                                        </div>

                                    <?php endif; ?>

                                <p class="animated fadeInDown wow"><?php the_sub_field('column_description');?></p>
                                <a class="button green animated fadeIn wow" href="<?php the_sub_field('column_button_link'); ?>"><?php the_sub_field('column_button_text');?></a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div> <!-- three_column_section -->

        <div class="two_column_section full_width">
            <div class="column one">
                <div class="my_container">
                    <h3 class="animated fadeInDown wow"><?php the_field('two_column_section_heading');?></h3>

                    <?php if (have_rows('two_column_section_list')) : ?>
                        <ul>
                            <?php while (have_rows('two_column_section_list')) : the_row(); ?>
                                <li class="animated fadeInLeft wow"><p><?php the_sub_field('item_text'); ?></p></li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>

                </div>
            </div>
            <?php $bgImage = get_field('right_column_background');?>
            <div class="column two" <?php if (!empty($bgImage)){ ?> style="background-image:url('<?php echo $bgImage['url']; ?>');" <?php } ?>></div>
        </div><!-- two_column_section -->

        <div class="cta_section full_width">
            <div class="my_container">
                <div class="cta_box full_width">
                    <div class="column one">
                        <?php $ctaHeading = get_field('cta_main_text'); ?>

                        <h3 class="animated fadeInDown wow"><?php echo $ctaHeading['white_text']; ?> <span><?php echo $ctaHeading['green_text']; ?> </span></h3>
                        <p class="animated fadeInUp wow"><?php the_field('cta_sub_text');?></p>
                    </div>

                    <div class="column two">
                        <a class="button green animated fadeIn wow" href="<?php the_field('cta_button_link'); ?>"><?php the_field('cta_button_text');?></a>
                    </div>
                </div>
            </div>
        </div><!-- cta_section -->

	</div>

<?php get_footer(); ?>