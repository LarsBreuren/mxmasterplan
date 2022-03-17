<?php 
   get_header(); ?>
   <div class="single">
        <?php while( have_posts() ): ?>
          <?php the_post(); ?>
            <div class="singleBanner container">
              <div class="opacity"></div>
              <div class="container">
                <div class="bannerTitle"><h1><?php echo get_the_title(); ?></h1></div>
              </div>
              <div class="heroImage" style="
              background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>');
              background-position:<?php echo get_field( "thumb_alignment" ); ?>;">
               </div>
              <img class="mountain" src="<?php echo get_theme_file_uri('/images/mountain.svg') ?>">
         </div>

        <div class="content container">
          <?php 
            $mainText = get_field('hoofdtekst');
            $textBlock1 = get_field('alinea1');
            $blockImage = get_field('fotoblok');
            $textBlock2 = get_field('alinea2');
          ?>
          <div class="contentBlock">
            <?php if( !empty( $mainText ) ): ?>
              <div class="textBlock firstText"><p>
              <p><b> Categorie: <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></b></p>
              <?php echo $mainText  ?></p></div>
            <?php endif; ?>

            <?php if( !empty( $textBlock1 ) ): ?>
              <div class="textBlock"><p><?php echo $textBlock1 ?></p></div>
              <?php endif; ?>
          </div>

            <?php if( !empty( $blockImage ) ): ?>
             <div class="textBlockImage"> <img class="textBlock " src="<?php echo esc_url($blockImage['url']); ?>" alt="<?php echo esc_attr($blockImage['alt']);  ?>" /></div>
            <?php endif; ?>

          <?php if( !empty( $textBlock2 ) ): ?>
            <div class="contentBlock">
              <div class="textBlock"><p><?php echo $textBlock2 ?></p></div>
            </div>
          <?php endif; ?>  

      <?php endwhile; ?>
    </div>
  </div>

<?php get_footer(); ?> 