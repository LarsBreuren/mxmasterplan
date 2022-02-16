<?php get_header(); ?>
    <div class="page-banner">
      <div class="skew"></div>
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/hero.jpg') ?>)"></div>
    <div class="page-banner__content container t-center c-white">
    </div>
  </div>
  <div class="indexContainer">
  <div class="highlightContainer">
<?php 
$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'post'
));
$display_Interesses = um_user('Interesses');
if( $posts ): ?>	
      <?php foreach( $posts as $post ):
          setup_postdata( $post );
          $cat = get_the_category($post->ID);
          $featured = get_field( "featured_article" );
          if ($featured == "1"){
          ?>
            <a href="<?php echo the_permalink() ?>" class="blogPost">
            <div class="thumbnail">
              <div class="category">
              <img class="catCircle" src="<?php echo get_template_directory_uri().'/images/circle.png'; ?>">

                <?php if ( ! empty( $cat ) ) {
                echo esc_html( $cat [0]->cat_name );   
              }  ?></div>
              <div class="skew"></div>
              <div class="thumbImg" style=' 
               background-image: url("<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>");
               background-position:<?php echo get_field( "thumb_alignment" ); ?>;
               '> </div>
          </div>
            <div class="content">
              <h2>FEATURED: <?php the_title(); ?></h2>
              <p><?php the_field( "intro" ); ?></p>             

         </div>
          </a>
          
        <?php } endforeach; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>

<div class="pilars">
<?php
$pillars = array("Sport", "NakedTour", "Adventure", "Customs");  

foreach( $pillars as $pillar ) { 
  if (in_array($pillar, $display_Interesses)) {?>
  <div class="pilar active" style=' background-image: url("<?php echo get_template_directory_uri()."/images/$pillar.jpg"; ?>");'>
    <div class="pilarTitle"><h2><?php echo $pillar ?></h2></div>
    <div class="skew"></div>
    <div class="skew2"></div>
  </div>
  <?php } else{ ?>
    <div class="pilar" style=' background-image: url("<?php echo get_template_directory_uri()."/images/$pillar.jpg"; ?>");'>
    <div class="pilarTitle"><h2><?php echo $pillar ?></h2></div>
    <div class="skew"></div>
    <div class="skew2"></div>
  </div>

<?php } 
}?>
</div>
<div class="sectionContainer">
  <div class="blogContainer">
    <?php 
    $posts = get_posts(array(
      'posts_per_page'	=> -1,
      'post_type'			=> 'post',
    ));

  if( $posts ): 
        foreach( $posts as $post ): 
            setup_postdata( $post );
            $cat = get_the_category($post->ID);
            if(  get_field( "featured_article" ) != "1"){
            ?>
              <a href="<?php echo the_permalink() ?>" class="blogPost">
              <div class="thumbnail">
                <div class="category">
                <img class="catCircle" src="<?php echo get_template_directory_uri().'/images/circle.png'; ?>">
                  <?php if ( ! empty( $cat ) ) {
                  echo esc_html( $cat [0]->cat_name );   
                }  ?></div>
                <div class="skew"></div>
                <div class="thumbImg" style=' background-image: url("<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>");
                background-position:<?php echo get_field( "thumb_alignment" ); ?>;'> </div>
            </div>
              <div class="content">
                <h2><?php the_title(); ?></h2>	
                <p><?php the_field( "intro" ); ?></p> 
              </div>
              <p class="author"><span>Geschreven door <?php the_author(); ?></span></p>
            </a>
          <?php } endforeach; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>

    <div class="sideBar">
      <div class="weatherMap">
        <h2>Weer vandaag </h2>
        <img src="<?php echo get_template_directory_uri().'/images/weerkaart.jpg'; ?>">
      </div>
      <div class="poll">
        <?php 
        echo do_shortcode('[poll id="4"]');
        ?>
      </div>
      <div class="routes">
        <h2>Nieuwste route</h2>
        <div class="newestRoute">
            <div class="metaData"></div>
            <div class="readMore"></div>
        </div>
      </div>
    </div>
  </div>
</div>
  <?php  get_footer();
?>