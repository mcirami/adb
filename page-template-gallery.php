<?php
/**
 * Template Name: Gallery
 *
 * The template for displaying home page.
 *
 *
 * @package boiler
 */

get_header(); ?>

    <div class="gallery_template full_width">
        <div class="my_container">
            <div class="page_title full_width text-left">
                <h3 class="animated fadeInDown wow"><?php the_field('page_title'); ?></h3>
            </div>

            <div class="description full_width">
                <p class="animated fadeInUp wow"><?php the_field('page_description'); ?></p>
            </div>
            <?php if (have_rows('image_gallery')) : ?>
                <div class="image_gallery full_width">

                    <?php while (have_rows('image_gallery')) : the_row();
                        $attachment_id = get_sub_field('gallery_image');

                        if (!empty($attachment_id)) :
                            $thumbSize = 'thumbnail';
                            $imageThumb = wp_get_attachment_image_src( $attachment_id, $thumbSize );
                            $fullSize = 'full';
                            $imageFull = wp_get_attachment_image_src( $attachment_id, $fullSize );
                    ?>
                            <div class="image_wrap animated fadeIn wow">
                                <a class="image_gallery" data-fancybox="gallery" data-caption="<?php the_sub_field('image_description'); ?>" data-type="image" href="<?php echo $imageFull[0];?>">
                                    <img src="<?php echo $imageThumb[0]; ?>"/>
                                </a>
                            </div>

                        <?php endif; ?>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>


<?php get_footer(); ?>
