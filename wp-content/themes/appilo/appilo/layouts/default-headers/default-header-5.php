<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Appilo
 */

$favicon = get_theme_mod('favicon_logo_control');
$main_logo = get_theme_mod('appilo_main_logo_settings' , 'url');
$svg_main_logo = get_theme_mod('appilo_svg_main_logo_settings' , 'url');
$blog_details = get_the_post_thumbnail_url(get_the_ID(),'full');

$cv_social_lists = get_theme_mod( 'galaxy_cv_social_header_list' );
$cv_social_switch = get_theme_mod( 'cv_social_switcher' );
$cv_language = get_theme_mod( 'cv_language_switcher' );
$cv_lang_lists = get_theme_mod( 'galaxy_cv_header_lang_list' );
$cv_lang_default_image = get_theme_mod( 'galaxy_cv_lang_default_image', 'url' );
$cv_lang_default_link = get_theme_mod( 'galaxy_cv_lang_default_link' );
?>

<!-- start page-wrapper -->
<div class="page-wrapper">
    <!-- Start header -->
    <header class="site-header header-style-1">
        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '' ) { ?>
                            <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo">
                        <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                            <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/galaxy/logo.png" alt="Default Logo"/>
                        <?php } ?>
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                    <button class="close-navbar"><i class="fas fa-times"></i></button>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'main_menu',
                        'menu_id'        => '',
                        'depth'           => 4,
                        'container' => 'ul',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb' => false,
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
                </div><!-- end of nav-collapse -->

                <div class="lang-social navbar-right">
                    <div class="lang">
                        <?php if ($cv_language):?>
                            <a href="<?php echo esc_url($cv_lang_default_link); ?>"><img src="<?php echo esc_url($cv_lang_default_image); ?>" alt></a>
                            <ul>
                                <?php if ($cv_lang_lists): foreach( $cv_lang_lists as $cv_lang ) : ?>
                                    <li><a href="<?php echo esc_url($cv_lang['lang_url']); ?>"><img src="<?php echo esc_url($cv_lang['lang_icon']); ?>"> <?php echo esc_html($cv_lang['lang_name']); ?></a></li>
                                <?php endforeach; endif;?>
                            </ul>
                        <?php endif;?>
                    </div>
                    <div class="social-links-wrapper">
                        <?php if ($cv_social_switch): ?>
                            <ul class="social-links">
                                <?php if ($cv_social_lists): foreach( $cv_social_lists as $cv_socials ) : ?>
                                    <li><a href="<?php echo esc_url($cv_socials['social_url']); ?>"><i class="fab <?php echo esc_html($cv_socials['icon_name']); ?>"></i></a></li>
                                <?php endforeach; endif;?>
                            </ul>
                        <?php endif;?>
                    </div>
                </div>
            </div><!-- end of container -->
        </nav>
    </header>
    <!-- end of header -->


    <?php if ( $blog_details != 'http://url' && $blog_details != 'url'  && $blog_details != ''):?>
    <div class="page-title" style="background-image:url(<?php echo esc_url($blog_details);?>)">
        <?php else:?>
        <div class="page-title" style="background-image:url(<?php echo get_template_directory_uri();?>/img/topapp/background/1.jpg)">
            <?php endif;?>
        <div class="container">
            <div class="title-box">
                <h1><?php wp_title('');?></h1>
                <ol class="breadcrumb">
                    <?php galaxy_the_breadcrumb();?>
                </ol>
            </div>
        </div> <!-- end container -->
    </div>
    <!-- end page-title -->
