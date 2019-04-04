<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Forbidden' );
}
if ( ! class_exists( 'woocommerce' ) ) {
	return;
}
global $product;
?>
<div <?php post_class( 'second-product' ) ?>>
    <div class="img-box">
		<?php if ( function_exists( 'the_post_thumbnail' ) && has_post_thumbnail() ): ?>
            <a rel="bookmark" href="<?php the_permalink(); ?>"
               title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail( 'dw_big_post', array( 'class' => 'img-responsive' ) ); ?>
            </a>
		<?php endif; ?>
    </div>
	<?php the_title( sprintf( '<h3 itemprop="name headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
    <div class="price">
		<?php if ( $product->get_sale_price() ) { ?>
            <span class="old-price">
                 <?php echo wc_price( $product->get_regular_price() ); ?>
            </span>
		<?php } ?>
        <span class="new-price">
		    <?php
		    if ( $product->get_sale_price() ) {
			    echo wc_price( $product->get_sale_price() );
		    } else {
			    echo wc_price( $product->get_price() );
		    }
		    ?>
        </span>
    </div>
    <div class="prod-footer">
		<?php
		echo apply_filters( 'woocommerce_loop_add_to_cart_link',
			sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="add-to-cart button dw-add-to-cart %s %s product_type_%s"%s><img width="35" src="%s" alt="cart"></a>',
				esc_url( $product->add_to_cart_url() ),
				esc_attr( $product->get_id() ),
				esc_attr( $product->get_sku() ),
				$product->get_type() == 'simple' ? 'dw-add-to-cart-ajax' : '',
				$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
				esc_attr( $product->get_type() ),
				$product->get_type() == 'external' ? ' target="_blank"' : '',
				esc_url( DW_IMAGES_DIR . 'ui/shopping-cart.png' )
			),
			$product );
		if ( is_page_template( 'page-favorites.php' ) ) {
			?>
            <button type="button" data-product_id="<?php echo esc_attr( $product->get_id() ); ?>"
                    class="prod-btn remove-from-favourite">
                <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
			<?php
		} else {
			?>
            <button type="button" data-product_id="<?php echo esc_attr( $product->get_id() ); ?>"
                    class="prod-btn add-to-favourite">
                <i class="fa fa-heart" aria-hidden="true"></i>
            </button>
			<?php
		}
		?>
    </div>
	<?php if ( $product->get_sale_price() ) { ?>
        <div class="offer"><?php esc_html_e( 'Sale', 'dw' ); ?></div>
	<?php } ?>
</div>