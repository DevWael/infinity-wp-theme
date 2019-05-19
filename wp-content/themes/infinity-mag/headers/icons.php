<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Forbidden' );
}
?>
<div class="dw-links">
	<?php $social = dw_social_media_urls();
	if ( $social ) { ?>
        <ul class="dw-nav-social">
			<?php
			foreach ( $social as $item ) {
				?>
                <li>
					<?php echo $item; ?>
                </li>
			<?php } ?>
        </ul>
	<?php } ?>
    <div class="buttons">
		<?php if ( class_exists( 'woocommerce' ) && dw_get_setting( 'cart_icon' ) == 'on' ) { ?>
            <div class="dw-cart">
                <a href="<?php echo get_permalink( wc_get_page_id( 'cart' ) ); ?>"
                   title="<?php esc_attr_e( 'Go to cart', 'dw' ) ?>">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span id="dw_cart_count_num"> <?php echo WC()->cart->get_cart_contents_count(); ?> </span>
                </a>
            </div>
		<?php } ?>
		<?php if ( dw_get_setting( 'search_nav' ) != 'off' ) { ?>
            <div class="dw-search-btn"><i class="fa fa-search" aria-hidden="true"></i></div>
		<?php } ?>
    </div>
</div>