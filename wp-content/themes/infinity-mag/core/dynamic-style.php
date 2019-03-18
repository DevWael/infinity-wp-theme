<?php
/**
 * Dynamic stylesheet.
 * Working only when the unyson framework is installed.
 * The output will be in head tag ( wp_head hook ).
 */

$window_id = $window_singular_id = '';
if ( is_category() ) { //Get the current category id
	$window_category = get_category( get_query_var( 'cat' ) );
	$window_id       = $window_category->cat_ID;

} elseif ( is_tag() ) { //Get the current tag id
	$window_tag = get_queried_object();
	$window_id  = $window_tag->term_id;
}

if ( is_singular() ) { //Get the current post or page id
	$window_singular_id = get_the_ID();
}

$window_mag_accent_color             = dw_get_setting( 'accent_color' );
$window_mag_second_color             = dw_get_setting( 'second_color' );
$window_mag_navbar_links_color       = dw_get_setting( 'navbar_links_color' );
$window_mag_navbar_links_color_hover = dw_get_setting( 'navbar_links_color_hover' );
$window_mag_body_style               = dw_get_setting( 'body_style' );
?>
    .header-block {
<?php if ( dw_get_setting( 'header_spacing/padding_top' ) ) { ?>
    padding-top: <?php echo absint( dw_get_setting( 'header_spacing/padding_top' ) ); ?>px;
<?php } ?>
<?php if ( dw_get_setting( 'header_spacing/padding_bottom' ) ) { ?>
    padding-bottom: <?php echo absint( dw_get_setting( 'header_spacing/padding_bottom' ) ); ?>px;
<?php } ?>
<?php if ( dw_get_setting( 'header_background/control' ) != 'off' ) { ?>
	<?php if ( dw_get_setting( 'header_background/background/color_select' ) ) { ?>
        background-color: <?php echo sanitize_hex_color( dw_get_setting( 'header_background/background/color_select' ) ); ?>;
	<?php } ?>
	<?php if ( dw_get_setting( 'header_background/background/image_select/url' ) ) { ?>
        background-image: url('<?php echo esc_url( dw_get_setting( 'header_background/background/image_select/url' ) ); ?>');
		<?php if ( dw_get_setting( 'header_background/background/bg_repeat' ) ) { ?>
            background-repeat: <?php echo esc_html( dw_get_setting( 'header_background/background/bg_repeat' ) ); ?>;
		<?php } ?>
		<?php if ( dw_get_setting( 'header_background/background/bg_size' ) ) { ?>
            background-size: <?php echo esc_html( dw_get_setting( 'header_background/background/bg_size' ) ); ?>;
		<?php } ?>
		<?php if ( dw_get_setting( 'header_background/background/bg_attach' ) ) { ?>
            background-attachment: <?php echo esc_html( dw_get_setting( 'header_background/background/bg_attach' ) ); ?>;
		<?php } ?>
		<?php if ( dw_get_setting( 'header_background/background/bg_position' ) ) { ?>
            background-position: <?php echo esc_html( dw_get_setting( 'header_background/background/bg_position' ) ); ?>;
		<?php } ?>
	<?php } ?>
<?php } ?>
    }

<?php if ( $window_id ) { //Term Meta ?>
	<?php if ( dw_get_term_setting( $window_id, 'body_background/control' ) != 'off' ) {
		?>
        body {
		<?php if ( dw_get_term_setting( $window_id, 'body_background/background/color_select' ) ) { ?>
            background-color: <?php echo sanitize_hex_color( dw_get_term_setting( $window_id, 'body_background/background/color_select' ) ); ?>;
		<?php } ?>
		<?php if ( dw_get_term_setting( $window_id, 'body_background/background/image_select/url' ) ) { ?>
            background-image: url('<?php echo esc_url( dw_get_term_setting( $window_id, 'body_background/background/image_select/url' ) ); ?>');
			<?php if ( dw_get_term_setting( $window_id, 'body_background/background/bg_repeat' ) ) { ?>
                background-repeat: <?php echo esc_html( dw_get_term_setting( $window_id, 'body_background/background/bg_repeat' ) ); ?>;
			<?php } ?>
			<?php if ( dw_get_term_setting( $window_id, 'body_background/background/bg_size' ) ) { ?>
                background-size: <?php echo esc_html( dw_get_term_setting( $window_id, 'body_background/background/bg_size' ) ); ?>;
			<?php } ?>
			<?php if ( dw_get_term_setting( $window_id, 'body_background/background/bg_attach' ) ) { ?>
                background-attachment: <?php echo esc_html( dw_get_term_setting( $window_id, 'body_background/background/bg_attach' ) ); ?>;
			<?php } ?>
			<?php if ( dw_get_term_setting( $window_id, 'body_background/background/bg_position' ) ) { ?>
                background-position: <?php echo esc_html( dw_get_term_setting( $window_id, 'body_background/background/bg_position' ) ); ?>;
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
} elseif ( $window_singular_id ) {
	if ( dw_get_meta( $window_singular_id, 'body_background/control' ) != 'off' ) { ?>
        body {
		<?php if ( dw_get_meta( $window_singular_id, 'body_background/background/color_select' ) ) { ?>
            background-color: <?php echo sanitize_hex_color( dw_get_meta( $window_singular_id, 'body_background/background/color_select' ) ); ?>;
		<?php } ?>
		<?php if ( dw_get_meta( $window_singular_id, 'body_background/background/image_select/url' ) ) { ?>
            background-image: url('<?php echo esc_url( dw_get_meta( $window_singular_id, 'body_background/background/image_select/url' ) ); ?>');
			<?php if ( dw_get_meta( $window_singular_id, 'body_background/background/bg_repeat' ) ) { ?>
                background-repeat: <?php echo esc_html( dw_get_meta( $window_singular_id, 'body_background/background/bg_repeat' ) ); ?>;
			<?php } ?>
			<?php if ( dw_get_meta( $window_singular_id, 'body_background/background/bg_size' ) ) { ?>
                background-size: <?php echo esc_html( dw_get_meta( $window_singular_id, 'body_background/background/bg_size' ) ); ?>;
			<?php } ?>
			<?php if ( dw_get_meta( $window_singular_id, 'body_background/background/bg_attach' ) ) { ?>
                background-attachment: <?php echo esc_html( dw_get_meta( $window_singular_id, 'body_background/background/bg_attach' ) ); ?>;
			<?php } ?>
			<?php if ( dw_get_meta( $window_singular_id, 'body_background/background/bg_position' ) ) { ?>
                background-position: <?php echo esc_html( dw_get_meta( $window_singular_id, 'body_background/background/bg_position' ) ); ?>;
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

<?php if ( $window_mag_accent_color ): //Main website color ?>
    #navbar .menu .current_page_item a,
    #navbar .menu > li:before,
    #navbar ul.menu ul a:hover,
    #navbar .menu ul ul a:hover{
    background: <?php echo sanitize_hex_color( $window_mag_accent_color ); ?>;
    }

    .main-menu,
    #navbar > ul > li > .sub-menu,
    #navbar > ul > li > .sub-menu li > .sub-menu{
    border-color: <?php echo sanitize_hex_color( $window_mag_accent_color ); ?>;
    }
<?php endif; ?>

<?php if ( $window_mag_second_color ): //Navbar background color ?>
    .main-menu,
    #navbar > ul > li > .sub-menu,
    #navbar > ul > li > .sub-menu li > .sub-menu,
    .carousel-box.category-box,
    .img-grid.category-box{
    background: <?php echo sanitize_hex_color( $window_mag_second_color ); ?>;
    }

    .top-header-posts,
    .main-menu .search-box input,
    .main-menu .search-box button,
    .read-more-button:hover,
    .read-more-button:focus,
    .read-more-button:active{
    background-color: <?php echo sanitize_hex_color( $window_mag_second_color ); ?>;
    }
<?php endif; ?>
<?php if ( $window_mag_navbar_links_color ): //Navbar links color ?>
    #navbar .menu li a,
    #navbar ul.menu ul a,
    #navbar .menu ul ul a,
    .main-menu .search-box input,
    .slicknav_nav li .fall-back,
    #navbar .menu ul > .menu-item-has-children > a:after,
    #navbar .menu > .menu-item-has-children > a:after{
    color: <?php echo sanitize_hex_color( $window_mag_navbar_links_color ); ?>;
    }
<?php endif; ?>
<?php if ( $window_mag_navbar_links_color_hover ): //Navbar links color on hover?>
    #navbar .menu > li > a:hover,
    #navbar .menu > li:hover > a:after,
    #navbar ul.menu ul a:hover,
    #navbar .menu ul ul a:hover,
    #navbar ul.menu ul a:hover:after,
    #navbar .menu ul ul a:hover:after{
    color: <?php echo sanitize_hex_color( $window_mag_navbar_links_color_hover ); ?>;
    }
<?php endif; ?>

<?php if ( dw_get_setting( 'logo_margin_top' ) ): ?>
    .slogan,
    .site-logo img{
    margin-top: <?php echo absint( dw_get_setting( 'logo_margin_top' ) ); ?>px;
    }
<?php endif; ?>

    /*Border Color*/
    blockquote,
    .main-menu .search-box input:focus,
    #navbar > ul > li > .sub-menu,
    #navbar > ul > li > .sub-menu li > .sub-menu,
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
    border-color: <?php echo sanitize_hex_color( $window_mag_accent_color ); ?>;
    }

    /*Background Color*/
    .nanobar .bar{
    background: <?php echo sanitize_hex_color( $window_mag_accent_color ); ?>;
    box-shadow: 3px 0 2px <?php echo sanitize_hex_color( $window_mag_accent_color ); ?>;
    }

    ::selection {
    background: <?php echo sanitize_hex_color( $window_mag_accent_color ); ?>;
    }
    ::-moz-selection {
    background: <?php echo sanitize_hex_color( $window_mag_accent_color ); ?>;
    }

    .review-system .review-footer .review-score,
    .top-post .article .listing-content{
    background-color: rgba(<?php echo dw_hex2rgb( $window_mag_accent_color ); ?>, 0.7);
    }

    /*Background*/
    #scroll,
    #navbar .menu .current_page_item a,
    #navbar .menu > li:before,
    #navbar ul.menu ul a:hover,
    #navbar .menu ul ul a:hover,
    .slicknav_nav,
    .slicknav_nav,
    .slicknav_nav ul,
    .block-name,
    .main-menu .search-toggle,
    .main-menu .search-box,
    .read-more-button,
    .singular .post-box-content form input[type=submit],
    .singular .gallery-box .owl-prev:hover,
    .singular .gallery-box .owl-next:hover,
    .post-navigation span:hover,
    .error-page .error-content form button,
    div#comments h3:after,
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
    .bbioon-fly-box .box-title,
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
    background: <?php echo sanitize_hex_color( $window_mag_accent_color ); ?>;
    }

    .mejs-controls .mejs-time-rail .mejs-time-current,
    .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current{
    background: <?php echo sanitize_hex_color( $window_mag_accent_color ); ?> !important;
    }

    /*background-color*/
    .main-menu .search-box button:hover,
    .home-slider.double-slides .owl-dots .owl-dot.active:before,
    .home-slider.double-slides .owl-dots .owl-dot:hover:before,
    .home-slider.many-slides .owl-dots .owl-dot.active:before,
    .home-slider.many-slides .owl-dots .owl-dot:hover:before,
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
    background-color: <?php echo sanitize_hex_color( $window_mag_accent_color ); ?>;
    }

    /*color*/
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
    color: <?php echo sanitize_hex_color( $window_mag_accent_color ); ?>;
    }

    .footer-widgets .small-post .post-content .post-title a:hover,
    .footer-widgets .small-post .post-content .post-title a:focus,
    .footer-widgets .small-post .post-content .post-title a:active{
    color: <?php echo sanitize_hex_color( $window_mag_accent_color ); ?> !important;
    }

    .windowmag-preset1 .block-name,
    .windowmag-preset1 .sidebar .widget .widget-title{
    border-bottom-color: <?php echo sanitize_hex_color( $window_mag_accent_color ); ?>;
    }
    .windowmag-preset1 .block-name span:before,
    .windowmag-preset1 .sidebar .widget .widget-title span:before{
    border-left-color: <?php echo sanitize_hex_color( $window_mag_accent_color ); ?>;
    }


    .windowmag-preset2 .block-name span,
    .windowmag-preset2 .sidebar .widget .widget-title span{
    background: <?php echo sanitize_hex_color( $window_mag_accent_color ); ?>;
    background: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0) 8%, <?php echo sanitize_hex_color( $window_mag_accent_color ); ?> 8%, <?php echo sanitize_hex_color( $window_mag_accent_color ); ?> 92%, rgba(255, 255, 255, 0) 92%);
    background: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0) 8%, <?php echo sanitize_hex_color( $window_mag_accent_color ); ?> 8%, <?php echo sanitize_hex_color( $window_mag_accent_color ); ?> 92%, rgba(255, 255, 255, 0) 92%);
    background: linear-gradient(135deg, rgba(255, 255, 255, 0) 8%, <?php echo sanitize_hex_color( $window_mag_accent_color ); ?> 8%, <?php echo sanitize_hex_color( $window_mag_accent_color ); ?> 92%, rgba(255, 255, 255, 0) 92%);
    }

<?php
//Custom css code
if ( dw_get_setting( 'css' ) ) {
	echo dw_get_setting( 'css' );
}
