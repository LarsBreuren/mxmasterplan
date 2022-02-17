<?php get_header(); ?>
    <div class="heroBanner">
      <div class="opacity"></div>
      <div class="container">
       <div class="content">
        <div class="slogan"><h1><?php the_field('banner_slogan', 15); ?></h1></div>
        <a href="<?php the_field('banner_knop_link', 15); ?>" class="ctaButton"><?php the_field('banner_knop_tekst', 15); ?></a>
        </div>
      </div>
      <div class="heroImage" style="background-image: url('<?php echo get_theme_file_uri('/images/hero2.jpg') ?>');"> </div>
      <img class="mountain" src="<?php echo get_theme_file_uri('/images/mountain.svg') ?>">
  </div>
  <div class="container">
  <main>
    <div class="text">
      <h1><?php the_field('hoofd_tekst_titel', 15); ?></h1>
      <p><?php the_field('hoofd_tekst', 15); ?></p>
    </div>
    <div class="calculator">
        <div class="bar">
          <progress max="<?php the_field('streef_bedrag', 15); ?>" value="<?php the_field('huidig_opgehaald_bedrag', 15); ?>"> 70% </progress>
          <span class="material-icons">  sports_score </span>
        </div>
          <p><span class="current">&euro;<?php the_field('huidig_opgehaald_bedrag', 15); ?></span> / &euro;<?php the_field('streef_bedrag', 15); ?></p>
        
  
   


    </div>
  </main>

  </div>

  <?php  get_footer();
?>