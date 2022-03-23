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
          <a href="https://mx-masterplan.com/"><h1>MX</h1></a>
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