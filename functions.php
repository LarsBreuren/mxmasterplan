<?php

function university_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('our-main-styles', get_theme_file_uri('/dist/styles.css'));
}

    add_action('wp_enqueue_scripts', 'university_files');

    function university_features(){
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'university_features');

    add_theme_support( 'post-thumbnails' );

    function my_custom_menu() {
      register_nav_menus(
          array(
              'my-custom-menu' => _( 'My Custom Menu' ),
              'my-custom-menu-2' =>_('My Second Custom Menu')
          )
      );
  }
  add_action( 'init', 'my_custom_menu' );

// Only use faq.js on the faq page for improved performance
       function my_scripts() {
       
        if( is_page( array( 'FAQ' ) ) ){
          wp_enqueue_script('my-script', get_template_directory_uri() .'/assets/js/faq.js');	
        }
        else if( is_page( array( 'Projecten' ) ) ){
          wp_enqueue_script('pie-chart', get_template_directory_uri() .'/assets/js/pieChart.js', array('jquery'), null, true); 
        }
        if( is_page( array( 'is_front_page()' ) ) ){
        wp_enqueue_script('counter', get_template_directory_uri() .'/assets/js/count.js');	
        }
    }
    add_action( 'wp_enqueue_scripts', 'my_scripts' );
?>



