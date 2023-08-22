<footer>
    <div class="mountainContainer"><div class="ductape"></div><div class="mountain" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/mountain.svg') ?>');"> </div></div>
    <div class="container">
        <div class="footerContent">
          <a class="logo" href="<?php echo home_url(); ?>">           
           <img src="<?php echo get_theme_file_uri('/assets/images/logo-footer-white.svg') ?>">
          </a>
            <div class="skew"></div>
            <div class="links">
                <?php
                $menu_location = 'footer';
                wp_nav_menu(array(
                    'theme_location' => $menu_location,
                    'container' => false, 
                    'menu_class' => 'menu', 
                ));
                ?>
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