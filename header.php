<!DOCTYPE html>
<html lang="en">

<head>
  <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
<div id="overlay" class="navOverlay"></div>
  <header class="site-header">
    <div class="navContainer">
      <div class="content">
        <div class="logo">
          <a href="https://mx-masterplan.com/">           
             <div><img class="logo" src="<?php echo get_theme_file_uri('/assets/images/logo-blue.svg') ?>"></div></a>
        </div>
        <div class="mainNav">
        <?php 
            wp_nav_menu( 
                array( 
                    'theme_location' => 'my-custom-menu'
                ) 
            ); 
        ?>
        </div>
        <div class="mobileNav">
        <img class="openNav" id="openNav" src="<?php echo get_theme_file_uri('/assets/images/icons/menu.svg') ?>">
          <div class="mobileContent" id="mobileContent">
            <div class="closeNav"><img id="closeNav" src="<?php echo get_theme_file_uri('/assets/images/icons/window-close.svg') ?>"></div>
            <?php 
                  wp_nav_menu( 
                      array( 
                          'theme_location' => 'my-custom-menu'
                      ) 
                  ); 
              ?>
            </div>
        </div>
      </div>
    </div>
  </header>