<?php
       function my_scripts() {
       
        if( is_page( array( 'FAQ' ) ) ){
          wp_enqueue_script('my-script', get_template_directory_uri() .'/assets/js/faq.js');	
        }
        else if( is_page( array( 'werkwijze' ) ) ){
          wp_enqueue_script('pie-chart', get_template_directory_uri() .'/assets/js/pieChart.js', array('jquery'), null, true); 
        }
        if( is_page( array( 'is_front_page()' ) ) ){
        wp_enqueue_script('counter', get_template_directory_uri() .'/assets/js/count.js');	
        }
        wp_enqueue_script('mobileMenu', get_template_directory_uri() .'/assets/js/mobileMenu.js');	
    }
    add_action( 'wp_enqueue_scripts', 'my_scripts' );
?>