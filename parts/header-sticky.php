<header class="header--sticky" id="site_header" role="banner">
    <div class="container">
        <div class="row">
            <div class="column">
                <a href="<?php echo home_url(); ?>" title="" class="site_logo">Logo</a>
                <div id="toggle_mobile_menu" class="hamburger hamburger--collapse" aria-label="<?php _e('Toggle menu visibility', 'wpcradle'); ?>">
                    <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                    </div>
                </div>
            </div>
            <div class="column medium-column-75">
                <?php cradle_top_nav(); ?>
            </div>
        </div>
    </div>
</header> <!-- end .header -->
