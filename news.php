<?php 
 /* Template Name: PageWithoutSidebar */
   get_header();
    while(have_posts()){
        the_post(); ?>
    <div class="newsBanner">
      <div class="opacity"></div>
      <div class="container">
       <div class="content">
        <div class="slogan"><h1><?php single_post_title(); ?></h1></div>
        </div>
      </div>
      <div class="heroImage" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"> </div>
      <img class="mountain" src="<?php echo get_theme_file_uri('/images/mountain.svg') ?>">
  </div>
        <?php } ?>

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


<?php    get_footer();
    ?>