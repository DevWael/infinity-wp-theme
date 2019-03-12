<?php
$window_mag_title_text   = $window_mag_sticky_nav = $window_mag_center_logo = $window_mag_retina = '';
$window_mag_header_style = dw_get_setting( 'header_types' );
if ( dw_get_setting( 'site_logo/tagline/center_text' ) == true ) {
	$window_mag_title_text = ' text-center';
}

if ( dw_get_setting( 'site_logo/logo/center_logo' ) ) {
	$window_mag_center_logo = ' center-block';
}

if ( 'on' === dw_get_setting( 'sticky_nav' ) ) {
	$window_mag_sticky_nav = ' sticky-nav';
}

if ( dw_get_setting( 'site_logo/logo/retina_select/url' ) ) {
	$window_mag_retina = dw_get_setting( 'site_logo/logo/retina_select/url' );
}

?>
<!doctype html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( dw_get_setting( 'website_layout' ) == 'boxed' ) { ?>
<div class="wrapper">
	<?php } elseif ( dw_get_setting( 'website_layout' ) == 'wide' ) { ?>
	<div class="wrapper wide">
		<?php } ?>
		<header class="main-header">
			<?php
			if ( 'on' == dw_get_setting( 'top_posts_switch/control' ) ) {
				if ( 'on' === dw_get_setting( 'top_posts_switch/on/home_only' ) ) {
					if ( is_front_page() ) {
						get_template_part( 'templates/top', 'posts' );
					}
				} else {
					get_template_part( 'templates/top', 'posts' );
				}
			}
			?>
			<?php
			//Modern style
			if ( $window_mag_header_style == 'modern' ):
				?>
				<div class="header-block modern">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<?php
								if ( dw_get_setting( 'site_logo/gadget' ) == 'logo' && dw_get_setting( 'site_logo/logo/logo_select/url' ) ):
									?>
									<div class="site-logo">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
										   title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
											<img
												src="<?php echo esc_url( dw_get_setting( 'site_logo/logo/logo_select/url' ) ) ?>"
												alt="<?php echo esc_attr( get_bloginfo( 'name' ) ) ?>"
												class="img-responsive<?php echo esc_attr( $window_mag_center_logo ); ?>"
												<?php if ( $window_mag_retina ){ ?>data-at2x="<?php echo esc_url( $window_mag_retina ); ?>"<?php } ?>>
										</a>
									</div>
								<?php else : ?>
									<div class="slogan<?php echo esc_attr( $window_mag_title_text ); ?>">
										<div class="site-title">
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
											   title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
												<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
											</a>
										</div>
										<p class="site-tagline">
											<?php echo esc_html( get_bloginfo( 'description' ) ); ?>
										</p>
									</div>
								<?php endif; ?>
							</div>
							<?php if ( 'off' !== dw_get_setting( 'banner_box1/gadget' ) ) { ?>
								<div class="col-md-8">
									<?php dw_ads( '1', 'ad-beside-logo' ); ?>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="main-menu<?php echo esc_attr( $window_mag_sticky_nav ); ?>">
					<div class="container">
						<?php if ( 'off' !== dw_get_setting( 'search_nav' ) ) { ?>
							<a href="#" class="search-toggle"><i class="fa fa-search"></i></a>
							<div class="search-box">
								<?php get_search_form(); ?>
							</div>
						<?php } ?>
						<nav id="navbar">
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
						<div class="menu-mobile"></div>
					</div>
				</div>
				<?php
				//News Ticker Since V1.2
				if ( 'on' == dw_get_setting( 'news_ticker_switch/control' ) ) {
					if ( 'on' === dw_get_setting( 'news_ticker_switch/on/home_only' ) ) {
						if ( is_front_page() ) {
							get_template_part( 'templates/news', 'ticker' );
						}
					} else {
						get_template_part( 'templates/news', 'ticker' );
					}
				}
				?>
			<?php elseif ( $window_mag_header_style == 'magazine' ) : ?>
				<div class="main-menu<?php echo esc_attr( $window_mag_sticky_nav ); ?>">
					<div class="container">
						<?php if ( 'off' !== dw_get_setting( 'search_nav' ) ) { ?>
							<a href="#" class="search-toggle"><i class="fa fa-search"></i></a>
							<div class="search-box">
								<?php get_search_form(); ?>
							</div>
						<?php } ?>
						<nav id="navbar">
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
						<div class="menu-mobile"></div>
					</div>
				</div>
				<div class="header-block magazine">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<?php
								if ( dw_get_setting( 'site_logo/gadget' ) == 'logo' && dw_get_setting( 'site_logo/logo/logo_select/url' ) ):
									?>
									<div class="site-logo">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
										   title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
											<img
												src="<?php echo esc_url( dw_get_setting( 'site_logo/logo/logo_select/url' ) ) ?>"
												alt="<?php echo esc_attr( get_bloginfo( 'name' ) ) ?>"
												class="img-responsive<?php echo esc_attr( $window_mag_center_logo ); ?>"
												<?php if ( $window_mag_retina ){ ?>data-at2x="<?php echo esc_url( $window_mag_retina ); ?>"<?php } ?>>
										</a>
									</div>
								<?php else : ?>
									<div class="slogan<?php echo esc_attr( $window_mag_title_text ); ?>">
										<div class="site-title">
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
											   title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
												<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
											</a>
										</div>
										<p class="site-tagline">
											<?php echo esc_html( get_bloginfo( 'description' ) ); ?>
										</p>
									</div>
								<?php endif; ?>
							</div>
							<?php if ( 'off' !== dw_get_setting( 'banner_box1/gadget' ) ) { ?>
								<div class="col-md-8">
									<?php dw_ads( '1', 'ad-beside-logo' ); ?>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<?php
				//News Ticker Since V1.2
				if ( 'on' == dw_get_setting( 'news_ticker_switch/control' ) ) {
					if ( 'on' === dw_get_setting( 'news_ticker_switch/on/home_only' ) ) {
						if ( is_front_page() ) {
							get_template_part( 'templates/news', 'ticker' );
						}
					} else {
						get_template_part( 'templates/news', 'ticker' );
					}
				}
				?>
			<?php else : //Simple  ?>
				<div class="header-block simple">
					<div class="container">
						<div class="col-md-12">
							<?php
							if ( dw_get_setting( 'site_logo/gadget' ) == 'logo' && dw_get_setting( 'site_logo/logo/logo_select/url' ) ):
								?>
								<div class="site-logo">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
									   title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
										<img
											src="<?php echo esc_url( dw_get_setting( 'site_logo/logo/logo_select/url' ) ) ?>"
											alt="<?php echo esc_attr( get_bloginfo( 'name' ) ) ?>"
											class="img-responsive<?php echo esc_attr( $window_mag_center_logo ); ?>"
											<?php if ( $window_mag_retina ){ ?>data-at2x="<?php echo esc_url( $window_mag_retina ); ?>"<?php } ?>>
									</a>
								</div>
							<?php else : ?>
								<div class="slogan<?php echo esc_attr( $window_mag_title_text ); ?>">
									<div class="site-title">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
										   title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
											<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
										</a>
									</div>
									<p class="site-tagline">
										<?php echo esc_html( get_bloginfo( 'description' ) ); ?>
									</p>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="main-menu<?php echo esc_attr( $window_mag_sticky_nav ); ?>">
					<div class="container">
						<?php if ( 'off' !== dw_get_setting( 'search_nav' ) ) { ?>
							<a href="#" class="search-toggle"><i class="fa fa-search"></i></a>
							<div class="search-box">
								<?php get_search_form(); ?>
							</div>
						<?php } ?>
						<nav id="navbar">
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
						<div class="menu-mobile"></div>
					</div>
				</div>
				<?php
				//News Ticker Since V1.2
				if ( 'on' == dw_get_setting( 'news_ticker_switch/control' ) ) {
					if ( 'on' === dw_get_setting( 'news_ticker_switch/on/home_only' ) ) {
						if ( is_front_page() ) {
							get_template_part( 'templates/news', 'ticker' );
						}
					} else {
						get_template_part( 'templates/news', 'ticker' );
					}
				}
				?>
				<?php if ( 'off' !== dw_get_setting( 'banner_box1/gadget' ) ) { ?>
					<div class="simple-ads">
						<div class="container">
							<?php dw_ads( '1', 'ad-header' ); ?>
						</div>
					</div>
				<?php } ?>
			<?php endif ?>
		</header>

