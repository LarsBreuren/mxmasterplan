<?php 
   get_header(); ?>
   <div class="single">
   <div class="page-banner">
    <div class="skew"></div>
    <div class="page-banner__bg-image" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>)"></div>
    <h1><?php the_title(); ?></h1>
</div>
<div class="content">
  <div class="container">
    <?php while( have_posts() ): ?>
            <?php the_post(); ?>
            Categorie: <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>
            <div class="intro"><p><?php echo get_field('intro'); ?></p></div>
            <?php endwhile; ?>
  </div>
</div>

<?php
    get_footer();
?>

</div>
<?php get_footer(); ?>