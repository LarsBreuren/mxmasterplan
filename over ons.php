<?php 
 /* Template Name: Over ons */
get_header(); ?>
<div class="secondaryBanner">
    <div class="opacity"></div>
    <div class="container">
        <div class="content">
        <div class="slogan"><h1><?php single_post_title(); ?></h1></div>
        </div>
    </div>
    <div class="heroImage" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"> </div>
    <img class="mountain" src="<?php echo get_theme_file_uri('/assets/images/mountain.svg') ?>">
</div>

<div class="container about">
        <?php echo get_field('veld_1' ); ?>
       <div style="padding-top: 3em;"> <?php echo get_field('veld_2' ); ?></div>
</div>
    
<?php  get_footer();?>