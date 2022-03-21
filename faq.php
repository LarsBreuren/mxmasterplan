<?php 
 /* Template Name: FAQ */
get_header(); ?>
<div class="newsBanner">
    <div class="opacity"></div>
    <div class="container">
    <div class="content">
    <div class="slogan"><h1><?php single_post_title(); ?></h1></div>
    </div>
    </div>
    <div class="heroImage" style="background-image: url('<?php echo get_theme_file_uri('/images/hero2.jpg') ?>');"> </div>
    <img class="mountain" src="<?php echo get_theme_file_uri('/images/mountain.svg') ?>">
</div>

    <div class="container faq">
     <h1> Veelgestelde vragen</h1>
         <?php
         $questions = get_field_objects( 148 );
         $counter = 1;
            if( $questions ): ?>

                <?php foreach( $questions as $question ): ?> 
                    <?php if (str_contains($question['label'], 'Vraag')) { 
                        ?> <div id="<?php echo $counter ?>" class="question"><p><?php echo $question['value']; ?></p><img src="<?php echo get_theme_file_uri('/images/icons/chevron-up.svg') ?>"></div>  <?php }
                    else{ ?>
                        <div id="answer<?php echo $counter ?>"class="answer"><p><?php echo $question['value']; ?></p></div>   
                <?php   $counter++; }
                 endforeach; ?>

            <?php endif; ?>
                </div>
            </div>

<?php  get_footer();?>

