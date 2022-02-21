<?php

function university_files() {
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    
    wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=yourkeygoeshere', NULL, '1.0', true);
  
    wp_enqueue_script('main-university-js', get_theme_file_uri('/dist/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('our-main-styles', get_theme_file_uri('/dist/styles.css'));
  
    wp_localize_script('main-university-js', 'universityData', array(
      'root_url' => get_site_url(),
      'nonce' => wp_create_nonce('wp_rest')
    ));
  }

    add_action('wp_enqueue_scripts', 'university_files');

    function university_features(){
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'university_features');

    add_theme_support( 'post-thumbnails' );

    function wpb_custom_new_menu() {
      register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
    }
    add_action( 'init', 'wpb_custom_new_menu' );

    function wdm_register_mobile_menu() {
      add_theme_support( 'nav-menus' );
      register_nav_menus( array('mobile-menu' => __( 'Mobile Menu', 'wdm' )) );
  }
  add_action( 'init', 'wdm_register_mobile_menu' );
?>