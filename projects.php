<?php 
 /* Template Name: projects */
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
        <img class="mountain" src="<?php echo get_theme_file_uri('/assets/images/mountain.svg') ?>">
    </div>
 <?php } ?>

 <div class="container projects">
    <div class="content">
        <h1> <?php the_field('titel', 330); ?></h1>
        <p><?php the_field('hoofdtekst', 330); ?> </p>
    </div>
 </div>
<?php get_footer(); ?>