<?php
$dw_sticky_nav = '';
if ( 'on' === dw_get_setting( 'sticky_nav' ) ) {
	$dw_sticky_nav = ' sticky-nav';
}

$news_ticker_margin = $nav_margin = '';
if ( 'on' == dw_get_setting( 'news_ticker_switch/control' ) ) {
	$nav_margin = '';
	$news_ticker_margin = ' extra-margin-bottom';
	if ( 'on' == dw_get_setting( 'news_ticker_switch/on/home_only' ) ) {
		if ( ! is_front_page() ) {
			$news_ticker_margin = ' extra-margin-bottom';
			$nav_margin         = ' extra-margin-bottom';
		}
	} else {
		$news_ticker_margin = ' extra-margin-bottom';
	}
} else {
	$news_ticker_margin = '';
	$nav_margin         = ' extra-margin-bottom';
}

?>
    <div class="dw-navbar<?php echo $dw_sticky_nav; ?>">
        <div class="top-nav-heder<?php echo $nav_margin; ?>">
            <div class="container">
                <div class="top-nav">
					<?php get_template_part( 'headers/logo' ) ?>
					<?php get_template_part( 'headers/nav' ) ?>
					<?php get_template_part( 'headers/icons' ) ?>
                </div>
            </div>
        </div>
		<?php
		if ( 'on' == dw_get_setting( 'news_ticker_switch/control' ) ) {
			if ( 'on' === dw_get_setting( 'news_ticker_switch/on/home_only' ) ) {
				if ( is_front_page() ) {
					?>
                    <div class="dw-news-ticker<?php echo $news_ticker_margin; ?>">
						<?php get_template_part( 'templates/news', 'ticker' ); ?>
                    </div>
					<?php
				}
			} else {
				?>
                <div class="dw-news-ticker<?php echo $news_ticker_margin; ?>">
					<?php get_template_part( 'templates/news', 'ticker' ); ?>
                </div>
				<?php
			}
		}
		?>
        <div class="wd-nav-banner">
            <div class="container">
				<?php if ( 'off' !== dw_get_setting( 'banner_box1/gadget' ) ) { ?>
					<?php dw_ads( '1', 'ad-header' ); ?>
				<?php } ?>
            </div>
        </div>
        <div class="nav-btn"><i class="fa fa-bars" aria-hidden="true"></i></div>
        <div class="overlay"></div>
    </div>
<?php get_template_part( 'headers/search' ) ?>