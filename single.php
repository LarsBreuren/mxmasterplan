<?php 
   get_header(); ?>
   <div class="single">
    <div class="content">
        <?php while( have_posts() ): ?>
          <?php the_post(); ?>
            <div class="singleBanner">
              <div class="opacity"></div>
              <div class="container">
              <div class="content">
                <div class="slogan"><h1><?php echo get_the_title(); ?></h1></div>
                </div>
              </div>
              <div class="heroImage" style="
              background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>');
              background-position:<?php echo get_field( "thumb_alignment" ); ?>;'>
              "> </div>
              <img class="mountain" src="<?php echo get_theme_file_uri('/images/mountain.svg') ?>">
         </div>
         <div class="container">
            Categorie: <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>
            <div class="intro"><p><?php echo get_field('hoofdtekst'); ?></p></div>
          <?php endwhile; ?>
      </div>
    </div>

<?php
    get_footer();
?>

</div>
<?php get_footer(); ?>