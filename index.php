<?php get_header(); ?>
    <div class="heroBanner">
      <div class="opacity"></div>
      <div class="content">
        <div class="slogan"><h1><?php the_field('banner_slogan', 15); ?></h1></div>
        <a href="<?php the_field('banner_knop_link', 15); ?>" class="ctaButton"><?php the_field('banner_knop_tekst', 15); ?></a>
      </div>
      <div class="heroImage" style="background-image: url('<?php echo get_theme_file_uri('/images/hero2.jpg') ?>');"> </div>
      <div class="mountain">
        <img src="<?php echo get_theme_file_uri('/images/mountain.svg') ?>">
      </div>
  </div>
  <div class="indexContainer">

Hi!    

  </div>

  <?php  get_footer();
?>