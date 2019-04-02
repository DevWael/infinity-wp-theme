<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Forbidden' );
}
if ( ! class_exists( 'woocommerce' ) ) {
	return;
}
global $product;
?>
<div <?php post_class( 'main-product' ); ?>>
    <div class="img-box">
		<?php if ( function_exists( 'the_post_thumbnail' ) && has_post_thumbnail() ): ?>
            <a rel="bookmark" href="<?php the_permalink(); ?>"
               title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail( 'dw_big_post', array( 'class' => 'img-responsive' ) ); ?>
            </a>
		<?php endif; ?>
    </div>
	<?php the_title( sprintf( '<h3 itemprop="name headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
    <p><?php dw_excerpt(); ?></p>
	<?php if ( $product->get_sale_price() ) { ?>
        <div class="old-price">
            <span> <?php echo wc_price( $product->get_regular_price() ); ?> </span>
            <span class="discount">
                <?php
                echo dw_product_discount_percentage();
                ?>
            </span>
        </div>
        <div class="offer"><?php esc_html_e( 'Sale', 'dw' ); ?></div>
	<?php } ?>
    <div class="prod-footer">
        <div class="new-price">
			<?php
			if ( $product->get_sale_price() ) {
				echo wc_price( $product->get_sale_price() );
			} else {
				echo wc_price( $product->get_price() );
			}
			?>
        </div>
		<?php
		echo apply_filters( 'woocommerce_loop_add_to_cart_link',
			sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="add-to-cart button dw-add-to-cart %s product_type_%s"%s><img src="%s" alt="cart" class="img-responsive"></a>',
				esc_url( $product->add_to_cart_url() ),
				esc_attr( $product->get_id() ),
				esc_attr( $product->get_sku() ),
				$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
				esc_attr( $product->get_type() ),
				$product->get_type() == 'external' ? ' target="_blank"' : '',
				esc_url( DW_IMAGES_DIR . 'ui/shopping-cart.png' )
			),
			$product );
		?>
    </div>
</div>