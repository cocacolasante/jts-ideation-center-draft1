<?php
function jts_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus([ 'primary' => __('Primary Menu', 'jts') ]);

add_theme_support( 'custom-logo', [
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
}
add_action( 'after_setup_theme', 'jts_theme_setup' );

function jts_enqueue_scripts() {
    wp_enqueue_style( 'jts-style', get_stylesheet_uri() );
    wp_enqueue_script( 'jts-main', get_template_directory_uri() . '/js/scripts.js', [], false, true );
}
add_action( 'wp_enqueue_scripts', 'jts_enqueue_scripts' );

// functions.php
function jt_register_menus() {
  register_nav_menu( 'primary', 'Primary Menu' );
}
add_action( 'init', 'jt_register_menus' );

?>