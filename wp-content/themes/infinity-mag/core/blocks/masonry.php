<?php

if ( ! function_exists( 'dw_masonry_box' ) ) {
	function dw_masonry_box( $cat_ids, $posts_count = 6, $block_title = '' ) {
		$arguments   = array(
			'posts_per_page'      => $posts_count,
			'category__in'        => $cat_ids,
			'ignore_sticky_posts' => 1,
			'meta_key'            => '_thumbnail_id',
			'no_found_rows'       => true
		);
		$posts_query = new WP_Query( $arguments );
		if ( $posts_query->have_posts() ) :
			?>
			<div class="masonry-box category-box">

				<?php if ( $block_title ) :
					$category_link = ( isset( $cat_ids[0] ) ) ? get_category_link( $cat_ids[0] ) : '';
					?>
					<h2 class="block-name">
						<?php if ( $category_link ): ?>
						<a href="<?php echo esc_url( $category_link ); ?>"
						   title="<?php echo esc_attr( $block_title ); ?>">
							<?php endif; ?>
							<span><?php echo esc_html( $block_title ); ?></span>
							<?php if ( $category_link ): ?>
						</a>
					<?php endif; ?>
					</h2>
				<?php endif; ?>
				<div class="masonry-grid row">
					<?php
					while ( $posts_query->have_posts() ):$posts_query->the_post();
						?>
						<div class="item col-md-6 col-sm-6 col-xs-12" itemscope itemtype="http://schema.org/Article">
							<?php
							get_template_part( 'templates/big', 'post' );
							?>
						</div>
						<?php
					endwhile;
					?>
				</div>
			</div>
			<?php
		endif;
		wp_reset_postdata();
	}
}