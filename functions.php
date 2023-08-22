<?php

function mx_setup() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('our-main-styles', get_theme_file_uri('/dist/styles.css'));
}

    add_action('wp_enqueue_scripts', 'mx_setup');

    function mx_features(){
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'mx_features');

    add_theme_support( 'post-thumbnails' );

    function mx_custom_menu() {
      register_nav_menus(
          array(
              'my-custom-menu' => _( 'My Custom Menu' ),
              'my-custom-menu-2' =>_('My Second Custom Menu'),
              'footer' =>_('Footer menu')
          )
      );
  }
  add_action( 'init', 'mx_custom_menu' );

/**
 * Loading custom scripts
 */
require get_template_directory() . '/inc/scripts-loader.php';

?>