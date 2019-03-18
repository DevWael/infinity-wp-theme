
<div class="dw-navbar header-two">
    <div class="wd-nav-banner">
        <div class="container">
            <a class="banner-box" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/banner.png" alt="img" class="img-responsive">
            </a>
        </div>
    </div>
    <div class="top-nav-heder">
        <div class="container">
            <div class="top-nav">
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
                    <div class="buttons">
                        <div class="dw-cart"> <a href="#"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a> </div>
                        <div class="dw-search-btn"> <i class="fa fa-search" aria-hidden="true"></i> </div>
                    </div>
                </div>
            </div>
            <div class="nav-btn"> <i class="fa fa-bars" aria-hidden="true"></i> </div>
        </div>
    </div>
    <div class="logo-wrapper">
        <a class="logo-box" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/logo-2.png" alt="img" class="img-responsive">
        </a>
    </div>
    <div class="overlay"></div>
</div>









<!--SEARCH BOX POPUP -->
<div class="search-big-box">
    <div class="search-form">
        <form>
            <input type="text" class="search-query-text" name="s" value="" id="search_input" title="Search">
            <label for="search_input"> Search and hit enter </label>
            <button type="submit"> <i class="fa fa-search"></i> </button>
        </form>
        <div class="search-message">
            <span class="text-message">  Input your search keywords and press Enter.  </span>
        </div>
    </div>
    <div class="close-button">  <i class="fa fa-times" aria-hidden="true"></i>  </div>
</div>

