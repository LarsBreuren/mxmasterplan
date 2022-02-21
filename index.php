<?php 
 /* Template Name: Homepage */
get_header(); ?>
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

    <div class="news">
      <h2> Laatste nieuws</h2>
      <div class="container">
        <?php 
          $posts = get_posts(array(
            'posts_per_page'	=> 2,
            'post_type'			=> 'post',
            'category_name' => 'nieuws', 
          ));
          if( $posts ): ?>	
                <?php foreach( $posts as $post ):
                    setup_postdata( $post );
                    $cat = get_the_category($post->ID);
                    $mainText = get_field( "hoofdtekst" );
                    ?>
                      <a href="<?php echo the_permalink() ?>" class="newsItem">
                        <div class="thumbImg" style=' 
                          background-image: url("<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>");
                          background-position:<?php echo get_field( "thumb_alignment" ); ?>;'>
                          <img class="mountain" src="<?php echo get_theme_file_uri('/images/mountain.svg') ?>">
                        </div>

                      <div class="content">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo $mainText ?></p>
                    </div>
                    </a>
              <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
      </div>
      <a href="#" class="ctaButton">Bekijk al het nieuws</a>
    </div>
    <?php 
    $fullWidthImgQuote = get_field('quote_foto', 15); ?>
    
  <div class="fullWidthImgQuote" style=' 
     background-image: url("<?php echo $fullWidthImgQuote['url'] ?>");'>
        <h3><?php echo the_field('quote', 15); ?></h3> 
        <div class="opacity"></div>
    </div>
  </main>

  </div>

  <?php  get_footer();
?>