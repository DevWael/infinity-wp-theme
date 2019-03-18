
<div class="dw-navbar">
    <div class="top-nav">
        <div class="container">
            <a class="logo-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/logo.png" alt="img" class="img-responsive">
            </a>
            <div class="dw-menu">
                <nav class="dw_navigation" id="dw_navigation">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'header_menu',
                            'depth'          => 3,
                            'container'      => false,
                            'menu_class'     => 'menu',
                            'fallback_cb'    => 'window_mag_nav_fallback'
                        )
                    );
                    ?>
                </nav>
            </div>
            <div class="dw-links">
            <ul class="dw-nav-social">
                <li> <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
                <li> <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
                <li> <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
            </ul>
            <div class="dw-cart"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> </div>
            <div class="dw-search-btn"> <i class="fa fa-search" aria-hidden="true"></i> </div>
        </div>
        </div>
    </div>
    <div class="wd-nav-banner">
        <div class="container">
             <a class="banner-box">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/banner.png" alt="img" class="img-responsive">
             </a>
        </div>
    </div>
</div>



