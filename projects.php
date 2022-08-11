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
                <h2>Inkomsten en uitgaven </h2>
                <div class="pie-charts">
                    <div class="pie1 pieID--micro-skills pie-chart--wrapper">
                    <h3>Inkomsten</h3>
                    <div class="pie-chart">
                        <div class="pie-chart__pie"></div>
                        <ul class="pie-chart__legend">
                           
                        <?php if(get_field('inkomst_label_1') && get_field('inkomst_waarde_1') ){ ?>
                            <li><em><?php echo get_field('inkomst_label_1') ?></em><div>&euro;<span><?php echo get_field('inkomst_waarde_1') ?></span></div></li>
                        <?php  } ?>
                        <?php if(get_field('inkomst_label_2') && get_field('inkomst_waarde_2') ){ ?>
                            <li><em><?php echo get_field('inkomst_label_2') ?></em><div>&euro;<span><?php echo get_field('inkomst_waarde_2') ?></span></div></li>
                        <?php  } ?>
                        <?php if(get_field('inkomst_label_3') && get_field('inkomst_waarde_3') ){ ?>
                            <li><em><?php echo get_field('inkomst_label_3') ?></em><div>&euro;<span><?php echo get_field('inkomst_waarde_3') ?></span></div></li>
                        <?php  } ?>
                        <?php if(get_field('inkomst_label_4') && get_field('inkomst_waarde_4') ){ ?>
                            <li><em><?php echo get_field('inkomst_label_4') ?></em><div>&euro;<span><?php echo get_field('inkomst_waarde_4') ?></span></div></li>
                        <?php  } ?>

                        </ul>
                        <p>Totaal: &euro;<b id="total0"></b></p>
                    </div>
                    </div>
                    <div class="pie2 pieID--categories pie-chart--wrapper">
                    <h3>Uitgaven</h3>
                    <div class="pie-chart">
                        <div class="pie-chart__pie"></div>
                        <ul class="pie-chart__legend">

                        <?php if(get_field('uitgave_label_1') && get_field('uitgave_waarde_1') ){ ?>
                            <li><em><?php echo get_field('uitgave_label_1') ?></em><div>&euro;<span><?php echo get_field('uitgave_waarde_1') ?></span></div></li>
                        <?php  } ?>
                        <?php if(get_field('uitgave_label_2') && get_field('uitgave_waarde_2') ){ ?>
                            <li><em><?php echo get_field('uitgave_label_2') ?></em><div>&euro;<span><?php echo get_field('uitgave_waarde_2') ?></span></div></li>
                        <?php  } ?>
                        <?php if(get_field('uitgave_label_3') && get_field('uitgave_waarde_3') ){ ?>
                            <li><em><?php echo get_field('uitgave_label_3') ?></em><div>&euro;<span><?php echo get_field('uitgave_waarde_3') ?></span></div></li>
                        <?php  } ?>
                        <?php if(get_field('uitgave_label_4') && get_field('uitgave_waarde_4') ){ ?>
                            <li><em><?php echo get_field('uitgave_label_4') ?></em><div>&euro;<span><?php echo get_field('uitgave_waarde_4') ?></span></div></li>
                        <?php  } ?>
                        <?php if(get_field('uitgave_label_5') && get_field('uitgave_waarde_5') ){ ?>
                            <li><em><?php echo get_field('uitgave_label_5') ?></em><div>&euro;<span><?php echo get_field('uitgave_waarde_5') ?></span></div></li>
                        <?php  } ?>

                        </ul>
                        <p>Totaal: &euro;<b id="total1"></b></p>
                    </div>
                    </div>
                    <p style="color: grey">Data gebaseerd op berekening van <?php echo get_field('datum_data') ?>. </p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>