<!DOCTYPE html>
<html lang="en">

<head>
  <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
  <header class="site-header">
    <div class="navContainer">
      <div class="content">
        <div class="logo">
          <a href="https://mx-masterplan.com/">           
             <div><img class="logo" src="<?php echo get_theme_file_uri('/images/logo-blue.svg') ?>"></div></a>
        </div>
        <div class="mainNav">
          <?php
          wp_nav_menu( array( 
              'theme_location' => 'my-custom-menu', 
              'container_class' => 'custom-menu-class' ) ); 
          ?>
        </div>
      </div>
    </div>
  </header>