<?php 
 /* Template Name: About */
get_header(); ?>
<div class="secondaryBanner">
    <div class="opacity"></div>
    <div class="container">
        <div class="content">
        <div class="slogan"><h1><?php single_post_title(); ?></h1></div>
        </div>
    </div>
    <div class="heroImage" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"> </div>
    <img class="mountain" src="<?php echo get_theme_file_uri('/images/mountain.svg') ?>">
</div>

<div class="container about">
<div class="intro">
    <h1> <?php echo get_field('header', 409 ); ?></h1>
     <?php echo get_field('intro', 409 ); ?></div>
    <div class="expertsContainer">
        <?php
        $fields = get_field_objects( 409 );
        if( $fields ): ?>
                <?php foreach( $fields as $field ): ?>
                    <?php if( have_rows($field['label']) ): ?>
                        <?php while( have_rows($field['label']) ): the_row(); 
                            // Get sub field values.
                            $name= get_sub_field('naam');
                            $function = get_sub_field('functie');
                            $quote = get_sub_field('quote');
                            $profileImage = get_sub_field('profielfoto');
                            ?>
                                <div class="expert">
                                     <?php if( !empty( $profileImage ) ): ?>
                                        <div class="profileImage"> <img src="<?php echo esc_url($profileImage['url']); ?>" alt="<?php echo esc_attr($profileImage['alt']);  ?>" /></div>
                                    <?php endif; ?>
                                    <div class="info">
                                        <?php if( !empty( $function ) ): ?>
                                            <div class="name"><h2><?php echo $name?></h2> </div>
                                        <?php endif; ?>         

                                        <?php if( !empty( $function ) ): ?>
                                        <div class="function"><p><?php echo $function ?> </p></div>
                                        <?php endif; ?>

                                        <?php if( !empty( $quote ) ): ?>
                                            <div class="quote"><p><?php echo $quote ?> </p></div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                        <?php  endwhile; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
    
<?php  get_footer();?>