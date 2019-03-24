<?php
$dw_sticky_nav = '';
if ( 'on' === dw_get_setting( 'sticky_nav' ) ) {
	$dw_sticky_nav = ' sticky-nav';
}
?>
<div class="dw-navbar header-two<?php echo $dw_sticky_nav; ?>">
    <div class="logo-wrapper">
		<?php get_template_part( 'headers/logo' ) ?>
    </div>

    <div class="top-nav-heder">
        <div class="container">
            <div class="top-nav">
	            <?php get_template_part( 'headers/nav' ) ?>
	            <?php get_template_part( 'headers/icons' ) ?>
            </div>
            <div class="nav-btn"> <i class="fa fa-bars" aria-hidden="true"></i> </div>
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
    <div class="wd-nav-banner">
        <div class="container">
			<?php if ( 'off' !== dw_get_setting( 'banner_box1/gadget' ) ) { ?>
				<?php dw_ads( '1', 'ad-header' ); ?>
			<?php } ?>
        </div>
    </div>
    <div class="overlay"></div>
</div>

<?php get_template_part( 'headers/search' ) ?>