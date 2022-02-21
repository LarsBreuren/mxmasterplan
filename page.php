<?php 
   get_header();
    while(have_posts()){
        the_post(); ?>
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

    <div class="container container--narrow page-section">

    <?php
    $theParent = wp_get_post_parent_id(get_the_ID());
    if ($theParent){ ?>
              <div class="metabox metabox--position-up metabox--with-home-link">
              <p>
                <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true">
      
                </i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span>
              </p>
            </div>
    <?php } ?>  


    <?php 
    $testArray = get_pages(array(
        'child_of' => get_the_ID()
    ));

    if ($theParent or $testArray ){ ?>

        <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title(); ?></a></h2>
        <ul class="min-list">
          <?php 
          if ($theParent){
            $findChildrenOf = $theParent;
          } else{
              $findChildrenOf = get_the_ID();
          }
            wp_list_pages(array(
                'title_li' => NULL,
                'child_of' => $findChildrenOf,
                'sort_column' => 'menu_order'
            )); 
          ?>
        </ul>
      </div>

   <?php } ?>

      <div class="generic-content">
        <?php the_content(); ?> 
      </div>
    </div>
     
        <?php
    }
    get_footer();
    ?>