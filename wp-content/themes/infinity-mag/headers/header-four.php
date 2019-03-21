<div class="dw-navbar header-four">
    <div class="top-nav-heder">
        <div class="container">
            <div class="top-nav">
	            <?php get_template_part( 'headers/logo' ) ?>
	            <?php get_template_part( 'headers/icons' ) ?>
            </div>
        </div>
    </div>
    <div class="header-four-nav">
	    <?php get_template_part( 'headers/nav' ) ?>
    </div>
    <div class="wd-nav-banner">
        <div class="container">
	        <?php if ( 'off' !== dw_get_setting( 'banner_box1/gadget' ) ) { ?>
		        <?php dw_ads( '1', 'ad-header' ); ?>
	        <?php } ?>
        </div>
    </div>
    <div class="nav-btn"> <i class="fa fa-bars" aria-hidden="true"></i> </div>
    <div class="overlay"></div>
</div>
<?php get_template_part( 'headers/search' ) ?>