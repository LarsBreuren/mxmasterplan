<?php 
 /* Template Name: Project detailpagina */
   get_header();
   ?>
   <div class="projectDetail ">
      <div class="secondaryBanner">
        <div class="opacity"></div>
        <div class="container">
        <div class="content">
          <div class="slogan"><h1><?php single_post_title(); ?></h1></div>
          </div>
        </div>
        <div class="heroImage" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-position:<?php echo get_field("thumbnail_uitlijning") ?>;"> </div>
        <img class="mountain" src="<?php echo get_theme_file_uri('/assets/images/mountain.svg') ?>">
    </div>
    <main>
      <?php echo get_field("hoofdtekst") ?>
      <a href="
      <?php
      if(get_field("terug_knop")){
        echo get_field("terug_knop");
      }else{
        echo site_url('/projecten');
      }
      ?>
      " class="smallCtaButton">Overzicht</a>
    </main>
  </div>

<?php    get_footer(); ?>