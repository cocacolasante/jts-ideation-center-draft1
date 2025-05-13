<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Your_Theme_Name
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">
    <div class="wrapper_inner">

        <header class="page_header with_hover_bg_color fixed scrolled">
            <div class="header_inner clearfix" style="display: flex; justify-content: space-between; align-items: center; padding: 10px 30px;">

                <div class="header_logo">
                    <?php
                    if ( has_custom_logo() ) {
                        the_custom_logo();
                    } else {
                        ?>
                        <a href="<?php echo esc_url( home_url('/') ); ?>">
                            <img class="navlogo" src="<?php echo esc_url( get_template_directory_uri() . '/public/images/quill-logo-1.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
                        </a>
                        <?php
                    }
                    ?>
                </div>

                <!-- Mobile menu toggle button -->
                <button id="menu-toggle" class="menu-toggle" aria-expanded="false" aria-controls="primary-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="screen-reader-text"><?php esc_html_e( 'Menu', 'your-text-domain' ); ?></span>
                </button>

                <nav id="site-navigation" class="header_menu" role="navigation">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'nav-menu',
                        'container'      => false,
                    ) );
                    ?>
                </nav>

            </div>
        </header>
