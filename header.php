
<!DOCTYPE html>
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
                    <?php if ( has_custom_logo() ) {
                        the_custom_logo();
                    } else { ?>
                        <img class="navlogo" src="<?php echo get_template_directory_uri(); ?>/public/images/quill-logo-1.png" alt="Logo">
                    <?php } ?>
                </div>
                <nav class="header_menu">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'menu_class'     => 'nav-menu',
                            'container'      => false
                        ) );
                    ?>
                </nav>
            </div>
        </header>
