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
      register_nav_menu('main-menu',__( 'Main menu' ));
      register_nav_menu('mobile-menu',__( 'Mobile menu' ));
    }
    add_action( 'init', 'wpb_custom_new_menu' );

// Only use faq.js on the faq page for improved performance
       function my_scripts() {
       
        if( is_page( array( 'FAQ' ) ) ){
          wp_enqueue_script('my-script', get_template_directory_uri() .'/assets/js/faq.js');	
        }
        wp_enqueue_script('counter', get_template_directory_uri() .'/assets/js/count.js');	
        wp_enqueue_script('counter', get_template_directory_uri() .'/assets/js/mobileMenu.js');	
    }
    add_action( 'wp_enqueue_scripts', 'my_scripts' );
?>



