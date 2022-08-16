<footer>
    <div class="mountainContainer"><div class="ductape"></div><div class="mountain" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/mountain.svg') ?>');"> </div></div>
    <div class="container">
        <div class="footerContent">
            <div><img class="logo" src="<?php echo get_theme_file_uri('/assets/images/logo-footer-white.svg') ?>"></div>
            <div class="links">
                <ul>
                    <li><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li><a href="<?php echo site_url('/het-masterplan'); ?>">Het masterplan</a></li>
                    <li><a href="<?php echo site_url('/nieuws'); ?>">Nieuws</a></li>
                    <li><a href="<?php echo site_url('/projecten'); ?>">Projecten</a></li>
                    <li><a href="<?php echo site_url('/over-ons'); ?>">Over ons</a></li>
                    <li><a href="<?php echo site_url('/faq'); ?>">FAQ</a></li>
                </ul> 
            </div>
            <div class="socials">
               <img src="<?php echo get_theme_file_uri('/assets/images/icons/instagram.svg') ?>" alt="Bekijk onze instagram" title="Bekijk onze instagram" />
               <img src="<?php echo get_theme_file_uri('/assets/images/icons/facebook.svg') ?>" alt="An example icon" title="Bekijk onze facebook"/>
               <img src="<?php echo get_theme_file_uri('/assets/images/icons/twitter.svg') ?>" alt="An example icon" title="Bekijk onze twitter" />
            </div>
        </div>
    </div>
</footer>
    <?php wp_footer(); ?>
</body>
</html>