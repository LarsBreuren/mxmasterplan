<?php 
 /* Template Name: FAQ */
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

<div class="container faq">
    <h1> Veelgestelde vragen</h1>
    <?php
    $fields = get_field_objects( 148 );
    $counter = 1;
    if( $fields ): ?>
            <?php foreach( $fields as $field ): ?>
                <?php if( have_rows($field['label']) ): ?>
                    <?php while( have_rows($field['label']) ): the_row(); 
                        // Get sub field values.
                        $question= get_sub_field('vraag');
                        $answer = get_sub_field('antwoord');
                        $active = get_sub_field('actief');
                        if ($active == '1'){ ?>
                            <div id="<?php echo $counter ?>" class="questionContainer">
                                <div class="question"><p><?php echo $question?></p> </div>
                                <div class="chevron"><img src="<?php echo get_theme_file_uri('/assets/images/icons/chevron-up.svg') ?>"></div> 
                                <div class="answer"><p><?php echo $answer ?> </p></div>
                            </div>
                        <?php }; ?>
                    <?php  endwhile; ?>
                <?php endif; ?>
            <?php $counter++; endforeach; ?>
    <?php endif; ?>
</div>
    
<?php  get_footer();?>