<?php 
 /* Template Name: Masterplan */
   get_header();
    while(have_posts()){
        the_post(); ?>
    <div class="secondaryBanner newsBanner">
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

      <div class="newsContainer">
      <div class="container">
            <div class="newsItems"> 
            <?php 
            $posts = get_posts(array(
              'post_type'			=> 'post',
              'posts_per_page'=> -1,
              'category_name' => 'het-masterplan', 
            ));
            if( $posts ): ?>	
                  <?php foreach( $posts as $post ):
                      setup_postdata( $post );
                      if(  get_field( "featured_article" ) != "Featured"){
                      $cat = get_the_category($post->ID);
                      $mainText = get_field( "hoofdtekst" );
                      ?>
                        <a href="<?php echo the_permalink() ?>" class="newsItem">
                          <div class="thumbImg" style=' 
                            background-image: url("<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>");
                            background-position:<?php echo get_field( "thumb_alignment" ); ?>;'>
                          </div>
                        <div class="opacity"></div>
                        <div class="content">
                          <h3><?php the_title(); ?></h3>
                      </div>
                      </a>
                <?php } endforeach; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>
          
      </div>
    </div>
<?php    get_footer();
    ?>