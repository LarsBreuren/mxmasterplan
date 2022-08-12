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
        <h1> <?php the_field('titel'); ?></h1>
        <p><?php the_field('hoofdtekst'); ?> </p>
        <div class="pillars">
            <div class="pillar">
                <img src="<?php echo get_theme_file_uri('/assets/images/icons/note-check.svg') ?>"> <!-- Made by creaticca creative agency - noun project -->
                <h2>Vergunningen</h2>
            </div>
            <div class="pillar">
                <img src="<?php echo get_theme_file_uri('/assets/images/icons/motorcross-helmet.svg') ?>"> <!-- Made by creaticca creative agency - noun project -->
                <h2>Veiligheid</h2>
            </div>
            <div class="pillar">
                <img src="<?php echo get_theme_file_uri('/assets/images/icons/forest.svg') ?>"> <!-- Made by creaticca creative agency - noun project -->
                <h2>Verduurzaming</h2>
            </div>

        </div>

        <p><?php the_field('pijlers'); ?> </p>
        
        <?php if( get_field('pie_chart_actief') ) { ?>
            <div class="pies wrapper"> <!-- with help from: https://codepen.io/MaciejCaputa/pen/VjVpRe -->
                <h1>Uitgaven en inkomsten</h1>
                <div class="pie-charts">

                    <div class="pie1 pieID--micro-skills pie-chart--wrapper">
                        <h2>Inkomsten</h2>
                        <div class="pie-chart">
                            <div class="pie-chart__pie"></div>
                            <ul class="pie-chart__legend">
                            <?php
                        $inkomsten = get_field('inkomsten');
                        $inkomstenCount =  count($inkomsten) / 2; // Count amount of fields in ACF and use this for loop, /2 because of the labels

                        for ($x = 1; $x <= $inkomstenCount; $x++) { 
                        $inkomstenLabel = esc_attr( $inkomsten['label_'.$x] );
                        $inkomstenWaarde = esc_attr( $inkomsten['waarde_'.$x] );

                        if(!empty($inkomstenLabel) && !empty($inkomstenWaarde) ){
                        ?><li><em><?php echo $inkomstenLabel ?></em><div>&euro;<span><?php echo $inkomstenWaarde ?></span></div></li>
                        <?php  }} ?>
                            </ul>
                            <p>Totaal: &euro;<b id="total0"></b></p>
                        </div>
                    </div>

                    <div class="pie2 pieID--categories pie-chart--wrapper">
                        <h2>Uitgaven</h2>
                        <div class="pie-chart">
                            <div class="pie-chart__pie"></div>
                            <ul class="pie-chart__legend">
                            <?php
                            $uitgaven = get_field('uitgaven');
                            $uitgavenCount =  count($uitgaven) / 2; // Count amount of fields in ACF and use this for loop, /2 because of the labels

                            for ($y = 1; $y <= $uitgavenCount; $y++) { 
                            $uitgavenLabel = esc_attr( $uitgaven['label_'.$y] );
                            $uitgavenWaarde = esc_attr( $uitgaven['waarde_'.$y] );

                            if(!empty($uitgavenLabel) && !empty($uitgavenWaarde) ){
                            ?>      
                                <li><em><?php echo $uitgavenLabel ?></em><div>&euro;<span><?php echo $uitgavenWaarde ?></span></div></li>
                            <?php  }} ?>
                            </ul>
                            <p>Totaal: &euro;<b id="total1"></b></p>
                        </div>
                    </div>
                    
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>