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

        <p><?php the_field('pijlers', 330); ?> </p>
        
        <?php if( get_field('pie_chart_actief', 330) ) { ?>
            <div class="wrapper"> <!-- with help from: https://codepen.io/MaciejCaputa/pen/VjVpRe -->
                <h1>Uitgaven en inkomsten</h1>
                <div class="pie-charts">
                    <div class="pieID--micro-skills pie-chart--wrapper">
                    <h2>Inkomsten</h2>
                    <div class="pie-chart">
                        <div class="pie-chart__pie"></div>
                        <ul class="pie-chart__legend">
                            <li><em>Donaties</em><span>670000</span></li>
                        </ul>
                    </div>
                    </div>
                    <div class="pieID--categories pie-chart--wrapper">
                    <h2>Uitgaven</h2>
                    <div class="pie-chart">
                        <div class="pie-chart__pie"></div>
                        <ul class="pie-chart__legend">
                            <li><em>Vergunningen</em><span>20000</span></li>
                            <li><em>Veiligheidssystemen</em><span>25000</span></li>
                            <li><em>Verduurzaming</em><span>13000</span></li>
                            <li><em>Onkosten</em><span>30000</span></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>