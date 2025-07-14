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
  // this is your global style.css
  wp_enqueue_style( 'jts-style', get_stylesheet_uri() );
  // other scripts…
}
add_action( 'wp_enqueue_scripts', 'jts_enqueue_scripts' );

// functions.php
function jt_register_menus() {
  register_nav_menu( 'primary', 'Primary Menu' );
}
add_action( 'init', 'jt_register_menus' );

function enqueue_swiper_assets() {
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true );
    wp_add_inline_script( 'swiper-js', "
      const swiper = new Swiper('.testimonial-carousel', {
        loop: true,
        autoplay: {
          delay: 6000,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        }
      });
    " );
}
add_action( 'wp_enqueue_scripts', 'enqueue_swiper_assets' );


?>

