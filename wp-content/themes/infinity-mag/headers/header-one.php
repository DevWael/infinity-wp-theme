
<div class="dw-navbar">
    <div class="top-nav">
        <div class="logo-box">
            <img src="" alt="img" class="img-fluid">
        </div>
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
            <ul>
                <li> <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
                <li> <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
                <li> <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
            </ul>
            <div class="dw-art"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> </div>
            <div class="dw-search-btn"> <i class="fa fa-search" aria-hidden="true"></i> </div>
        </div>
    </div>
    <div class="wd-nav-banner">
         <div class="banner-box">
             <img src="" alt="img" class="img-fluid">
         </div>
    </div>
</div>



