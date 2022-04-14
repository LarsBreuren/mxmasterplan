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
      <div class="heroImage" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/hero3.jpg') ?>');"> </div>
      <img class="mountain" src="<?php echo get_theme_file_uri('/assets/images/mountain.svg') ?>">
  </div>
  <div class="container">
  <main>
    <div class="text">
      <h1><?php the_field('hoofd_tekst_titel', 15); ?></h1>
      <p><?php the_field('hoofd_tekst', 15); ?></p>
      <a  href="<?php the_field('hoofd_tekst_link', 15); ?>" class="smallCtaButton"><?php the_field('hoofd_tekst_link_tekst', 15); ?></a>
    </div>
    <div class="amount">
    <div class="background" style="background-image: url(' <?php echo get_theme_file_uri('/assets/images/icons/motorbike.svg') ?>')"></div>
      <div class="wrapper">
        <div class="number">
          <p class="euro">&euro;</p>
          <p id="value" class="value" akhi="<?php the_field('huidig_opgehaald_bedrag', 15); ?>">0</p>
          <p>,-</p>
        </div>
        <div class="text">Opgehaald</div>
      </div>
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
                      <img class="mountain" src="<?php echo get_theme_file_uri('/assets/images/mountain.svg') ?>">
                    </div>

                  <div class="content">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo $mainText ?></p>
                </div>
                <div class="date"><p><?php echo get_the_date( 'd-m-y' ); ?></p></div>
                </a>
          <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
  </div>
  <a href="/nieuws" class="ctaButton">Meer nieuws</a>
</div>
  <?php 
    $fullWidthImgQuote = get_field('quote_foto', 15); ?>
  <div class="fullWidthImgQuote" style=' 
     background-image: url("<?php echo $fullWidthImgQuote['url'] ?>");'>
        <h3><?php echo the_field('quote', 15); ?></h3> 
        <div class="opacity"></div>
    </div>

    <div class="fullWidthQuote">
      <div class="container">
        <h3><?php echo the_field('wide_quote', 15); ?></h3>
      </div> 
    </div>

  
    <?php
      $chosenID = get_field('fotomettekst', 15); 
    ?>

    <div class="imgWithTextSection">
      <div class="bar"></div>
      <div class="container">
        <div class="flexContainer">
          <div class="img" 
            style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($chosenID));?>');
            background-position:<?php echo get_field( 'thumb_alignment', $chosenID ); ?>"> 
          </div>
          <div class="text">
            <h3> <?php echo get_the_title( $chosenID ); ?></h3>
            <p> <?php
                $cutMainText = substr(get_field('hoofdtekst', $chosenID) ,0, 400);
                echo  $cutMainText;
                // echo the_field('hoofdtekst', $chosenID)
                ?>...</p>
            <a  href="<?php the_field('fotomettekstlink', 15); ?>" class="smallCtaButton"><?php echo the_field('fotomettekstknoptekst', 15); ?></a> 
          </div>
        </div>
      </div>
    </div>
  <?php  get_footer();
?>

