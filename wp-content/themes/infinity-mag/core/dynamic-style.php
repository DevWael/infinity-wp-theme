<?php
/**
 * Dynamic stylesheet.
 * Working only when the unyson framework is installed.
 * The output will be in head tag ( wp_head hook ).
 */

$dw_id = $dw_singular_id = '';
if ( is_category() ) { //Get the current category id
	$dw_category = get_category( get_query_var( 'cat' ) );
	$dw_id       = $dw_category->cat_ID;

} elseif ( is_tag() ) { //Get the current tag id
	$dw_tag = get_queried_object();
	$dw_id  = $dw_tag->term_id;
}

if ( is_singular() ) { //Get the current post or page id
	$dw_singular_id = get_the_ID();
}

$dw_accent_color             = dw_get_setting( 'accent_color' );
$dw_second_color             = dw_get_setting( 'second_color' );
$dw_navbar_links_color       = dw_get_setting( 'navbar_links_color' );
$dw_navbar_links_color_hover = dw_get_setting( 'navbar_links_color_hover' );
$dw_body_style               = dw_get_setting( 'body_style' );
?>
<?php if ( dw_get_setting( 'nav_color' ) ) { ?>
    .dw-navbar .top-nav-heder{
        background-color: <?php echo sanitize_hex_color( dw_get_setting( 'nav_color' ) ); ?>;
    }
    .dw-navbar .dw-menu .menu .sub-menu,
    .dw-navbar .dw-menu{
    background: <?php echo sanitize_hex_color( dw_get_setting( 'nav_color' ) ); ?>;
    }
<?php } ?>

<?php if ( $dw_id ) { //Term Meta ?>
	<?php if ( dw_get_term_setting( $dw_id, 'body_background/control' ) != 'off' ) {
		?>
        body {
		<?php if ( dw_get_term_setting( $dw_id, 'body_background/background/color_select' ) ) { ?>
            background-color: <?php echo sanitize_hex_color( dw_get_term_setting( $dw_id, 'body_background/background/color_select' ) ); ?>;
		<?php } ?>
		<?php if ( dw_get_term_setting( $dw_id, 'body_background/background/image_select/url' ) ) { ?>
            background-image: url('<?php echo esc_url( dw_get_term_setting( $dw_id, 'body_background/background/image_select/url' ) ); ?>');
			<?php if ( dw_get_term_setting( $dw_id, 'body_background/background/bg_repeat' ) ) { ?>
                background-repeat: <?php echo esc_html( dw_get_term_setting( $dw_id, 'body_background/background/bg_repeat' ) ); ?>;
			<?php } ?>
			<?php if ( dw_get_term_setting( $dw_id, 'body_background/background/bg_size' ) ) { ?>
                background-size: <?php echo esc_html( dw_get_term_setting( $dw_id, 'body_background/background/bg_size' ) ); ?>;
			<?php } ?>
			<?php if ( dw_get_term_setting( $dw_id, 'body_background/background/bg_attach' ) ) { ?>
                background-attachment: <?php echo esc_html( dw_get_term_setting( $dw_id, 'body_background/background/bg_attach' ) ); ?>;
			<?php } ?>
			<?php if ( dw_get_term_setting( $dw_id, 'body_background/background/bg_position' ) ) { ?>
                background-position: <?php echo esc_html( dw_get_term_setting( $dw_id, 'body_background/background/bg_position' ) ); ?>;
			<?php }
		} ?>
        }
		<?php
	} else {
		if ( dw_get_setting( 'body_background/control' ) != 'off' ) { ?>
            body {
			<?php if ( dw_get_setting( 'body_background/background/color_select' ) ) { ?>
                background-color: <?php echo sanitize_hex_color( dw_get_setting( 'body_background/background/color_select' ) ); ?>;
			<?php } ?>
			<?php if ( dw_get_setting( 'body_background/background/image_select/url' ) ) { ?>
                background-image: url('<?php echo esc_url( dw_get_setting( 'body_background/background/image_select/url' ) ); ?>');
				<?php if ( dw_get_setting( 'body_background/background/bg_repeat' ) ) { ?>
                    background-repeat: <?php echo esc_html( dw_get_setting( 'body_background/background/bg_repeat' ) ); ?>;
				<?php } ?>
				<?php if ( dw_get_setting( 'body_background/background/bg_size' ) ) { ?>
                    background-size: <?php echo esc_html( dw_get_setting( 'body_background/background/bg_size' ) ); ?>;
				<?php } ?>
				<?php if ( dw_get_setting( 'body_background/background/bg_attach' ) ) { ?>
                    background-attachment: <?php echo esc_html( dw_get_setting( 'body_background/background/bg_attach' ) ); ?>;
				<?php } ?>
				<?php if ( dw_get_setting( 'body_background/background/bg_position' ) ) { ?>
                    background-position: <?php echo esc_html( dw_get_setting( 'body_background/background/bg_position' ) ); ?>;
				<?php } ?>
			<?php } ?>
            }
		<?php }
	}
} elseif ( $dw_singular_id ) {
	if ( dw_get_meta( $dw_singular_id, 'body_background/control' ) != 'off' ) { ?>
        body {
		<?php if ( dw_get_meta( $dw_singular_id, 'body_background/background/color_select' ) ) { ?>
            background-color: <?php echo sanitize_hex_color( dw_get_meta( $dw_singular_id, 'body_background/background/color_select' ) ); ?>;
		<?php } ?>
		<?php if ( dw_get_meta( $dw_singular_id, 'body_background/background/image_select/url' ) ) { ?>
            background-image: url('<?php echo esc_url( dw_get_meta( $dw_singular_id, 'body_background/background/image_select/url' ) ); ?>');
			<?php if ( dw_get_meta( $dw_singular_id, 'body_background/background/bg_repeat' ) ) { ?>
                background-repeat: <?php echo esc_html( dw_get_meta( $dw_singular_id, 'body_background/background/bg_repeat' ) ); ?>;
			<?php } ?>
			<?php if ( dw_get_meta( $dw_singular_id, 'body_background/background/bg_size' ) ) { ?>
                background-size: <?php echo esc_html( dw_get_meta( $dw_singular_id, 'body_background/background/bg_size' ) ); ?>;
			<?php } ?>
			<?php if ( dw_get_meta( $dw_singular_id, 'body_background/background/bg_attach' ) ) { ?>
                background-attachment: <?php echo esc_html( dw_get_meta( $dw_singular_id, 'body_background/background/bg_attach' ) ); ?>;
			<?php } ?>
			<?php if ( dw_get_meta( $dw_singular_id, 'body_background/background/bg_position' ) ) { ?>
                background-position: <?php echo esc_html( dw_get_meta( $dw_singular_id, 'body_background/background/bg_position' ) ); ?>;
			<?php }
		} ?>
        }
		<?php
	} else {
		if ( dw_get_setting( 'body_background/control' ) != 'off' ) { ?>
            body {
			<?php if ( dw_get_setting( 'body_background/background/color_select' ) ) { ?>
                background-color: <?php echo sanitize_hex_color( dw_get_setting( 'body_background/background/color_select' ) ); ?>;
			<?php } ?>
			<?php if ( dw_get_setting( 'body_background/background/image_select/url' ) ) { ?>
                background-image: url('<?php echo esc_url( dw_get_setting( 'body_background/background/image_select/url' ) ); ?>');
				<?php if ( dw_get_setting( 'body_background/background/bg_repeat' ) ) { ?>
                    background-repeat: <?php echo esc_html( dw_get_setting( 'body_background/background/bg_repeat' ) ); ?>;
				<?php } ?>
				<?php if ( dw_get_setting( 'body_background/background/bg_size' ) ) { ?>
                    background-size: <?php echo esc_html( dw_get_setting( 'body_background/background/bg_size' ) ); ?>;
				<?php } ?>
				<?php if ( dw_get_setting( 'body_background/background/bg_attach' ) ) { ?>
                    background-attachment: <?php echo esc_html( dw_get_setting( 'body_background/background/bg_attach' ) ); ?>;
				<?php } ?>
				<?php if ( dw_get_setting( 'body_background/background/bg_position' ) ) { ?>
                    background-position: <?php echo esc_html( dw_get_setting( 'body_background/background/bg_position' ) ); ?>;
				<?php } ?>
			<?php } ?>
            }
		<?php }
	}
} else {
	if ( dw_get_setting( 'body_background/control' ) != 'off' ) { ?>
        body {
		<?php if ( dw_get_setting( 'body_background/background/color_select' ) ) { ?>
            background-color: <?php echo sanitize_hex_color( dw_get_setting( 'body_background/background/color_select' ) ); ?>;
		<?php } ?>
		<?php if ( dw_get_setting( 'body_background/background/image_select/url' ) ) { ?>
            background-image: url('<?php echo esc_url( dw_get_setting( 'body_background/background/image_select/url' ) ); ?>');
			<?php if ( dw_get_setting( 'body_background/background/bg_repeat' ) ) { ?>
                background-repeat: <?php echo esc_html( dw_get_setting( 'body_background/background/bg_repeat' ) ); ?>;
			<?php } ?>
			<?php if ( dw_get_setting( 'body_background/background/bg_size' ) ) { ?>
                background-size: <?php echo esc_html( dw_get_setting( 'body_background/background/bg_size' ) ); ?>;
			<?php } ?>
			<?php if ( dw_get_setting( 'body_background/background/bg_attach' ) ) { ?>
                background-attachment: <?php echo esc_html( dw_get_setting( 'body_background/background/bg_attach' ) ); ?>;
			<?php } ?>
			<?php if ( dw_get_setting( 'body_background/background/bg_position' ) ) { ?>
                background-position: <?php echo esc_html( dw_get_setting( 'body_background/background/bg_position' ) ); ?>;
			<?php } ?>
		<?php } ?>
        }
	<?php } ?>
<?php } ?>
    footer {
<?php if ( dw_get_setting( 'footer_background/control' ) != 'off' ) { ?>
	<?php if ( dw_get_setting( 'footer_background/background/color_select' ) ) { ?>
        background-color: <?php echo sanitize_hex_color( dw_get_setting( 'footer_background/background/color_select' ) ); ?>;
	<?php } ?>
	<?php if ( dw_get_setting( 'footer_background/background/image_select/url' ) ) { ?>
        background-image: url('<?php echo esc_url( dw_get_setting( 'footer_background/background/image_select/url' ) ); ?>');
		<?php if ( dw_get_setting( 'footer_background/background/bg_repeat' ) ) { ?>
            background-repeat: <?php echo esc_html( dw_get_setting( 'footer_background/background/bg_repeat' ) ); ?>;
		<?php } ?>
		<?php if ( dw_get_setting( 'footer_background/background/bg_size' ) ) { ?>
            background-size: <?php echo esc_html( dw_get_setting( 'footer_background/background/bg_size' ) ); ?>;
		<?php } ?>
		<?php if ( dw_get_setting( 'footer_background/background/bg_attach' ) ) { ?>
            background-attachment: <?php echo esc_html( dw_get_setting( 'footer_background/background/bg_attach' ) ); ?>;
		<?php } ?>
		<?php if ( dw_get_setting( 'footer_background/background/bg_position' ) ) { ?>
            background-position: <?php echo esc_html( dw_get_setting( 'footer_background/background/bg_position' ) ); ?>;
		<?php } ?>
	<?php } ?>
<?php } ?>
    }

<?php if ( 'off' !== dw_get_setting( 'search_nav' ) ) { ?>
    #navbar {
    padding-right: 50px;
    }
<?php } ?>

<?php if ( dw_get_setting( 'footer_background/background/image_select/url' ) && dw_get_setting( 'footer_background/control' ) != 'off' ) { ?>
    footer .overlay{
    background: rgba(0,0,0,0.8);
    }
<?php } ?>

<?php if ( $dw_accent_color ): //Main website color ?>
    #navbar .menu .current_page_item a,
    #navbar .menu > li:before,
    #navbar ul.menu ul a:hover,
    #navbar .menu ul ul a:hover{
    background: <?php echo sanitize_hex_color( $dw_accent_color ); ?>;
    }

    .main-menu,
    #navbar > ul > li > .sub-menu,
    #navbar > ul > li > .sub-menu li > .sub-menu{
    border-color: <?php echo sanitize_hex_color( $dw_accent_color ); ?>;
    }
<?php endif; ?>

<?php if ( $dw_second_color ): //Navbar background color ?>


    .top-header-posts,
    .main-menu .search-box input,
    .main-menu .search-box button,
    .read-more-button:hover,
    .read-more-button:focus,
    .read-more-button:active{
    background-color: <?php echo sanitize_hex_color( $dw_second_color ); ?>;
    }
<?php endif; ?>
<?php if ( $dw_navbar_links_color ): //Navbar links color ?>
    #navbar .menu li a,
    #navbar ul.menu ul a,
    #navbar .menu ul ul a,
    .main-menu .search-box input,
    .slicknav_nav li .fall-back,
    #navbar .menu ul > .menu-item-has-children > a:after,
    #navbar .menu > .menu-item-has-children > a:after{
    color: <?php echo sanitize_hex_color( $dw_navbar_links_color ); ?>;
    }
<?php endif; ?>
<?php if ( $dw_navbar_links_color_hover ): //Navbar links color on hover?>
    #navbar .menu > li > a:hover,
    #navbar .menu > li:hover > a:after,
    #navbar ul.menu ul a:hover,
    #navbar .menu ul ul a:hover,
    #navbar ul.menu ul a:hover:after,
    #navbar .menu ul ul a:hover:after{
    color: <?php echo sanitize_hex_color( $dw_navbar_links_color_hover ); ?>;
    }
<?php endif; ?>

<?php if ( dw_get_setting( 'logo_margin_top' ) ): ?>
    .slogan,
    .site-logo img{
    margin-top: <?php echo absint( dw_get_setting( 'logo_margin_top' ) ); ?>px;
    }
<?php endif; ?>

    /*Border Color*/
    .dw-navbar .dw-nav-social a:hover,
    .dw-navbar .dw-menu .menu .sub-menu,
    blockquote,
    .main-menu .search-box input:focus,
    .main-product:hover .add-to-cart,
    .second-product .prod-btn:hover,
    .second-product .in-favourite,
    .third-product .prod-btn:hover,
    .third-product .in-favourite,
    #navbar > ul > li > .sub-menu,
    #navbar > ul > li > .sub-menu li > .sub-menu,
    .woocommerce-ordering .orderby,
    .woocommerce-result-count,
    .woocommerce-Input--password,
    .woocommerce-Input--email,
    .woocommerce-Input--text,
    .woocommerce-input-wrapper .input-text,
    .woocommerce.widget_product_search .woocommerce-product-search input,
    .singular .post-box-content form input[type=text],
    .singular .post-box-content form input[type=password],
    .singular .post-box-content form input[type=email],
    .singular .post-box-content form input[type=submit],
    .error-page .error-content form button,
    .comment-form input[type=text]:focus,
    div#comments textarea:focus,
    .footer-widgets .widget .tagcloud a:hover,
    .widget .tagcloud a:hover,
    .main-menu .search-box input,
    .widget.widget_search form button,
    .footer-widgets .widget .social_widget_container a i:hover,
    .singular .post-box-content .wpcf7-form input[type=text]:focus,
    .singular .post-box-content .wpcf7-form input[type=email]:focus,
    .singular .post-box-content .wpcf7-form input[type=number]:focus,
    .singular .post-box-content .wpcf7-form input[type=date]:focus,
    .singular .post-box-content .wpcf7-form input[type=password]:focus,
    .singular .post-box-content .wpcf7-form textarea:focus,
    .wpnl input[type=email]:focus,
    .wpcf7-form input[type=text]:focus,
    .wpcf7-form input[type=email]:focus,
    .wpcf7-form input[type=number]:focus,
    .wpcf7-form input[type=date]:focus,
    .wpcf7-form input[type=password]:focus,
    .wpcf7-form textarea:focus{
    border-color: <?php echo sanitize_hex_color( $dw_accent_color ); ?>;
    }

    /*Background Color*/
    .nanobar .bar{
    background: <?php echo sanitize_hex_color( $dw_accent_color ); ?>;
    box-shadow: 3px 0 2px <?php echo sanitize_hex_color( $dw_accent_color ); ?>;
    }

    ::selection {
    background: <?php echo sanitize_hex_color( $dw_accent_color ); ?>;
    }
    ::-moz-selection {
    background: <?php echo sanitize_hex_color( $dw_accent_color ); ?>;
    }

    .review-system .review-footer .review-score,
    .top-post .article .listing-content{
    background-color: rgba(<?php echo dw_hex2rgb( $dw_accent_color ); ?>, 0.7);
    }

    /*Background*/
    .search-big-box .search-message::after,
    .multi-article-slider .owl-dot,
    .two-block-owl .owl-dot,
    .posts-area .post-wrapper-title::after,
    .individual-icon-post:hover .post-icon,
    #scroll,
    .main-product .old-price .discount,
    .main-product .offer,
    #navbar .menu .current_page_item a,
    #navbar .menu > li:before,
    #navbar ul.menu ul a:hover,
    #navbar .menu ul ul a:hover,
    .main-product:hover .add-to-cart,
    .second-product .offer,
    .second-product .prod-btn:hover,
    .second-product .in-favourite,
    .third-product .offer,
    .third-product .prod-btn:hover,
    .third-product .in-favourite,
    .slicknav_nav,
    .slicknav_nav,
    .slicknav_nav ul,
    .block-name,
    .main-menu .search-toggle,
    .main-menu .search-box,
    .read-more-button,
    .bbioon-fly-box .box-title span:before,
    .posts-area .post-wrapper-title::before,
    .singular .post-box-content form input[type=submit],
    .singular .gallery-box .owl-prev:hover,
    .singular .gallery-box .owl-next:hover,
    .post-navigation span:hover,
    .error-page .error-content form button,
    div#comments h3:after,
    div#comments a,
    div#comments h2:after,
    div#comments input#submit-comment:hover,
    .CommentHeadLinks a:hover,
    .widget .widget-title,
    .widget .social_widget_container a i:hover,
    .widget .tagcloud a:hover,
    .widget.widget_search form button,
    .footer-widgets .widget .social_widget_container a i:hover,
    .wpcf7-form button,
    .wpcf7-form html input[type=button],
    .wpcf7-form input[type=reset],
    .wpnl input[type=submit],
    .wpcf7-form input[type=submit],
    .windowmag-preset1 .block-name span,
    .windowmag-preset1 .sidebar .widget .widget-title span,
    .singular .post-box-content .wpcf7-form button,
    .singular .post-box-content .wpcf7-form html input[type=button],
    .singular .post-box-content .wpcf7-form input[type=reset],
    .singular .post-box-content .wpcf7-form input[type=submit],
    div#comments h3.comment-reply-title:after,
    div#comments h2.single-title:after,
    .widget_window_mag_login_box .login-form .login-button,
    .singular .mejs-controls .mejs-volume-button .mejs-volume-slider .mejs-volume-current,
    .reading-indicator,
    .post-cover .count{
    background: <?php echo sanitize_hex_color( $dw_accent_color ); ?>;
    }

    .mejs-controls .mejs-time-rail .mejs-time-current,
    .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current{
    background: <?php echo sanitize_hex_color( $dw_accent_color ); ?> !important;
    }

    /*background-color*/
    .main-menu .search-box button:hover,
    .woocommerce ul.products li.product .onsale,
    .woocommerce #respond input#submit.alt,
    .woocommerce a.button.alt,
    .woocommerce button.button.alt,
    .woocommerce input.button.alt,
    .woocommerce #respond input#submit:hover,
    .woocommerce a.button:hover,
    .woocommerce button.button:hover,
    .woocommerce input.button:hover,
    .woocommerce-MyAccount-navigation ul .woocommerce-MyAccount-navigation-link a:hover,
    .woocommerce-MyAccount-navigation ul .woocommerce-MyAccount-navigation-link.is-active a,
    .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
    .home-slider.double-slides .owl-dots .owl-dot.active:before,
    .home-slider.double-slides .owl-dots .owl-dot:hover:before,
    .home-slider.many-slides .owl-dots .owl-dot.active:before,
    .home-slider.many-slides .owl-dots .owl-dot:hover:before,
    .woocommerce.widget_product_search .woocommerce-product-search button,
    .woocommerce .woocommerce-widget-layered-nav-dropdown__submit:hover,

    .woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt:disabled[disabled], .woocommerce #respond input#submit.alt:disabled[disabled]:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled], .woocommerce a.button.alt:disabled[disabled]:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt:disabled[disabled], .woocommerce button.button.alt:disabled[disabled]:hover, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt:disabled[disabled], .woocommerce input.button.alt:disabled[disabled]:hover,

    .singular .post-feature-box .self-hosted-element,
    .singular .post-feature-box .link-element,
    .singular .gallery-box,
    .singular .gallery-box .owl-dots .owl-dot.active,
    .singular .gallery-box .owl-dots .owl-dot:hover,
    .singular .tags a:hover,
    .singular .page-links a,
    .review-system .criteria .progress .progress-bar,
    .related-posts .related-header h3:after,
    .pagePagination ul .active a,
    .comments-area .navigation a:hover,
    .author-bio-box .author-info .user-social a i:hover,
    .footer-widgets .widget .widget-title:after,
    .news-ticker .ticker-title .title,
    .news-ticker .ticker-container .owl-nav .owl-prev:after,
    .news-ticker .ticker-container .owl-nav .owl-next:after{
    background-color: <?php echo sanitize_hex_color( $dw_accent_color ); ?>;
    }

    /*color*/
    .dw-navbar .current-menu-item a,
    .dw-navbar a:hover,
    .dw-navbar .sub-menu .menu-item-has-children > a:hover::after,
    .dw-navbar .dw-cart,
    .dw-navbar .dw-cart a,
    .navbar-alert,
    .search-big-box .search-query-text,
    .search-big-box .search-form label,
    .writer-info a:hover,
    .full-article-slider .owl-nav div:hover,
    .multi-article-slide:hover h3 a,
    .multi-article-slider .owl-nav div:hover,
    .main-article h3 a:hover,
    .posts-area .post-wrapper-title a:hover,
    .posts-area .post-wrapper-title a:focus,
    .posts-area .post-wrapper-title a:active,
    .main-post h3 a:hover,
    .main-post h3 a:focus,
    .main-post h3 a:active,
    .main-post h3 a:hover,
    .side-post:hover h3 a,
    .side-post h3 a:hover,
    .small-post:hover h3 a,
    .small-post h3 a:hover,
    .posts-carousel .carousel-post .data h3 a:hover,
    .individual-post .read-more,
    .individual-post a:hover,
    .cover-post h3 a:hover,
    .cover-post .read-more,
    .individual-icon-post .read-more,
    .individual-icon-post a:hover,
    .cover-posts-owl .owl-prev:hover,
    .cover-posts-owl .owl-next:hover,
    .main-product:hover h3 a,
    .second-product:hover h3 a,
    .third-product:hover h3 a,
    .home-slider.center-slide .main-item .post-data .contents .post-title a:hover,
    .home-slider.center-slide .main-item .post-data .contents .slide-post-meta a:hover,
    .page-header h1 span,
    .small-post .post-content .post-meta a:hover,
    .small-post .post-content .post-meta a:focus,
    .small-post .post-content .post-meta a:active,
    .big-post .post-content .post-meta a:hover,
    .big-post .post-content .post-meta a:focus,
    .big-post .post-content .post-meta a:active,
    .list-post .post-text .post-content .post-meta a:hover,
    .list-post .post-text .post-content .post-meta a:active,
    .list-post .post-text .post-content .post-meta a:focus,
    .window-class .breadcrumbs a:hover,
    .singular .post-box-meta span.like-system:hover i,
    .singular .post-box-meta a:hover,
    .singular .post-box-meta a:active,
    .singular .post-box-meta a:focus,
    .author-bio-box .author-info .auhtor-name .name a,
    .author-bio-box .author-info .auhtor-name .name,
    .singular .edit-link a,
    .singular .post-box-content a,
    .singular .tags i,
    .singular .share-box:hover:before,
    .singular .share-box .share-icons li a:hover i,
    .singular .share-box .share-icons li a:hover span,
    .posts-navigation .nav-links a:hover,
    .posts-navigation .nav-links a:focus,
    .posts-navigation .nav-links a:active,
    .error-page .error-content form button:hover,
    div#comments h3 a:hover,
    .bypostauthor > .comment-wrap > .commentHead > .CommentHeadDetails > .comment-author:before,
    .footer-widgets .widget .calendar_wrap table tbody td a:hover,
    .footer-widgets .widget .calendar_wrap table tbody td a:focus,
    .footer-widgets .widget .calendar_wrap table tbody td a:active,
    ol.comments_list .commentHead .CommentHeadDetails h4 a,
    .widget a:hover,
    .widget a:focus,
    .widget a:active,
    .widget .calendar_wrap table tbody td a:hover,
    .widget .calendar_wrap table tbody td a:focus,
    .widget .calendar_wrap table tbody td a:active,
    .widget.widget_search form button:hover,
    .widget.widget_recent_comments li a,
    .footer-widgets .widget a:hover,
    .footer-widgets .widget a:focus,
    .footer-widgets .widget a:active,
    .list-post .post-text .post-content .post-title.h4 a:hover,
    .list-post .post-text .post-content .post-title.h4 a:focus,
    .list-post .post-text .post-content .post-title.h4 a:active,
    .small-post .post-content .post-title a:hover,
    .small-post .post-content .post-title a:focus,
    .small-post .post-content .post-title a:active,
    .big-post .post-content .post-title.h4 a:hover,
    .big-post .post-content .post-title.h4 a:focus,
    .big-post .post-content .post-title.h4 a:active,
    .news-ticker .ticker-container .ticker-post .post-title a:hover,
    .news-ticker .ticker-container .ticker-post .post-title a:focus,
    .news-ticker .ticker-container .ticker-post .post-title a:active{
    color: <?php echo sanitize_hex_color( $dw_accent_color ); ?>;
    }

    .footer-widgets .small-post .post-content .post-title a:hover,
    .footer-widgets .small-post .post-content .post-title a:focus,
    .footer-widgets .small-post .post-content .post-title a:active{
    color: <?php echo sanitize_hex_color( $dw_accent_color ); ?> !important;
    }

    .windowmag-preset1 .block-name,
    .windowmag-preset1 .sidebar .widget .widget-title{
    border-bottom-color: <?php echo sanitize_hex_color( $dw_accent_color ); ?>;
    }
    .windowmag-preset1 .block-name span:before,
    .windowmag-preset1 .sidebar .widget .widget-title span:before{
    border-left-color: <?php echo sanitize_hex_color( $dw_accent_color ); ?>;
    }


    .windowmag-preset2 .block-name span,
    .windowmag-preset2 .sidebar .widget .widget-title span{
    background: <?php echo sanitize_hex_color( $dw_accent_color ); ?>;
    background: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0) 8%, <?php echo sanitize_hex_color( $dw_accent_color ); ?> 8%, <?php echo sanitize_hex_color( $dw_accent_color ); ?> 92%, rgba(255, 255, 255, 0) 92%);
    background: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0) 8%, <?php echo sanitize_hex_color( $dw_accent_color ); ?> 8%, <?php echo sanitize_hex_color( $dw_accent_color ); ?> 92%, rgba(255, 255, 255, 0) 92%);
    background: linear-gradient(135deg, rgba(255, 255, 255, 0) 8%, <?php echo sanitize_hex_color( $dw_accent_color ); ?> 8%, <?php echo sanitize_hex_color( $dw_accent_color ); ?> 92%, rgba(255, 255, 255, 0) 92%);
    }

<?php
//Custom css code
if ( dw_get_setting( 'css' ) ) {
	echo dw_get_setting( 'css' );
}
