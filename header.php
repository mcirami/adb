<?php
/**
 * The Header for our theme.
 *
 * @package boiler
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    
	<header id="global_header" class="full_width">
        <div class="my_container">
            <div class="header_left">
                <div class="logo float-left">
                    <?php $logo = get_field('logo','options'); ?>
                    <h1><a href="/"><img src="<?php echo $logo['url'];?>" alt="American Design Builders"></a></h1>
                </div>
                <a class="mobile_menu_icon" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="header_right">
                <div class="header_info full_width text-center">
                    <div class="hr_content d-inline-block float-md-right">
                        <div class="icon_wrap float-left">
                            <img src="<?php echo bloginfo('template_url'); ?>/images/icon-phone.png"/>
                        </div>
                        <div class="text_wrap float-left">
                            <div class="full_width">
                                <a class="float-left" href="tel:618-476-7276">618-476-7276</a><span class="float-left">,</span>
                                <a class="float-left" href="tel:816-805-0344">816-805-0344</a>
                            </div>

                            <h4><a href="mailto:joe@americandesignbuilders.com">joe@americandesignbuilders.com</a></h4>
                        </div>
                        <a class="button blue float-right float-md-left" href="<?php the_field('header_button_link','options'); ?>"><?php the_field('header_button_text', 'options'); ?></a>
                    </div>
                </div><!-- header_info -->

                <div id="header_menu" class="menu full_width">
                    <nav id="header_nav" role="navigation" class="float-right">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'header_menu' ) ); // remember to assign a menu in the admin to remove the container div ?>
                    </nav>

                </div>
            </div><!-- header_right -->

        </div><!-- my_container -->
	</header>
    <div class="wrapper full_width">



